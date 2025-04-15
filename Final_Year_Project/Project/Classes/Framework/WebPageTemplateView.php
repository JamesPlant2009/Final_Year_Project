<?php

namespace Framework;
/**
 * WebPageTemplateView.php
 */
class WebPageTemplateView
{

    protected $page_title;
    protected $html_page_output;

    public function __construct()
    {
        $this->page_title = '';
        $this->html_page_output = '';
    }

    public function __destruct()
    {
    }

    /**
     * @return void
     */
    public function createWebPage(): void
    {
        $this->createWebPageMetaHeadings();
        $this->insertPageContent();
    }

    /**
     * creates the head used for the web application
     */
    private function createWebPageMetaHeadings()
    {
        $css_filename = CSS_PATH . CSS_FILE_NAME;

        // font-awesome required for the small V symbol next to Admin Tools
        $html_output = <<< HTML
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="$css_filename" type="text/css" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous">
<title>$this->page_title</title>
</head>
<body>
HTML;
        $this->html_page_output .= $html_output;
    }



    /** either provides an empty string - indicating not logged in
     * or a string consisting of the user's nickname,
     * then adds it to top right.
     * @return string
     */
    private function checkLoggedInSections(): string
    {
        if (isset($_SESSION['username']) && isset($_SESSION['loggedin'])) {
            if (isset($_SESSION['admin']) && $_SESSION['admin']) {
                return <<< HTML
                    <button name="route" value="member_profile">My Profile</button>
                    <li class="main-link"><button name="route" value="device_list_view">Devices</button></li>
                    <button name="route" value="logout">Log Out</button>
                    <li class="dropdown">
                        <button class="dropdown-button">Admin Tools <i class="fas fa-chevron-down"></i></button>
                        <div class="dropdown-content">
                            <button  name="route" value="matrix_add">Add Matrix</button>
                            <button  name="route" value="matrix_edit">Matrix Edit</button>
                            <button  name="route" value='training_edit'>Training Edit</button>
                        </div>
                    </li>
HTML;
            } else {
                return <<< HTML
HTML;
            }
        } else {
            $html_output = <<< HTML
                    <button name="route" value="register">Register</button>
                    <button name="route" value="login">Login</button>
HTML;
            return $html_output;
        }
    }

    /**
     * creates the header used on all pages, also adds in a 'div' element that helps functionality for the burger menu used on mobile devices.
     * outlines all the buttons used for navigation of the application and routes them to the appropriate place in the router
     */
    private function insertPageContent()
    {
        $logged_in_title = $this->checkLoggedInTitle();
        $logged_in_btns = $this->checkLoggedInSections();
        $address = APP_ROOT_PATH;
        $html_output = <<< HTML
<header class="header">
        <h1>CryptoShow$logged_in_title</h1>
        <div class="burger-menu">
            <svg class="show" xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 96 960 960" width="36"><path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"/></svg>
         </div>
        <form class="high-width" action="$address" method="post">
            <nav>
                <ul>
                    <li class="main-link"><button name="route" value="Matrix_list">Matrix List</button></li>
                    $logged_in_btns
                </ul>
            </nav>
        </form>
    </header>
    
    <div class="burger-menu-display">
        <ul>
            <form class="low-width" action="$address" method="post">
                <li class="main-link"><button name="route" value="matrix_list">Matrix_list</button></li>
                $logged_in_btns 
            </form>              
        </ul>
    </div>
<body>
HTML;
        $this->html_page_output .= $html_output;
    }


    /**
     * creates the footer of the webpage including adding in some basic javascript fucntionality that shows and hides the burger menu when clicked/tapped by a user.
     */
    public function createWebPageFooter()
    {
        $html_output = <<< HTML
<script>
        function showBurgerMenu() {
            const burgerMenuDisplay = document.querySelector('.burger-menu-display');
            burgerMenuDisplay.style.display = 'flex';
        }

        function hideBurgerMenu() {
            const burgerMenuDisplay = document.querySelector('.burger-menu-display');
            burgerMenuDisplay.style.display = 'none'; 
        }

        document.querySelector('.burger-menu').addEventListener('click', function() {
            if (this.classList.contains('active')) {
                hideBurgerMenu();
                this.classList.remove('active');
            } else {
                showBurgerMenu();
                this.classList.add('active');
            }
        });

        const burgerMenuButtons = document.querySelectorAll('.burger-menu-display button');
        burgerMenuButtons.forEach(button => {
            button.addEventListener('click', function() {
                hideBurgerMenu();
                document.querySelector('.burger-menu').classList.remove('active');
            });
        });
    </script>
</body>
</html>
HTML;
        $this->html_page_output .= $html_output;
    }
}
