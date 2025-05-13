<?php

class WebPageTemplateView
{
    private $menu_bar;
    protected $page_title;
    protected $html_page_content;
    protected $html_page_output;

    public function __construct()
    {
        $this->page_title = '';
        $this->html_page_content = '';
        $this->html_page_output = '';
        $this->menu_bar = '';
    }

    public function __destruct(){}

    public function createWebPage()
    {
        $this->createMenuBar();
        $this->createWebPageMetaHeadings();
        $this->insertPageContent();
        $this->createWebPageFooter();
    }

    //change!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!//
    private function createWebPageMetaHeadings()
    {
        $css_filename = CSS_PATH . CSS_FILE_NAME;
        $html_output = <<< HTML
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="$css_filename" type="text/css" />
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="James Plant" />
<title>$this->page_title</title>
</head>
<body>
HTML;
        $this->html_page_output .= $html_output;
    }


    private function insertPageContent()
    {
        $landing_page = APP_ROOT_PATH;

        $html_output = <<< HTML
$this->menu_bar
$this->html_page_content
HTML;
        $this->html_page_output .= $html_output;
    }
    private function createMenuBar()
    {

        $landing_page = APP_ROOT_PATH;
        $image = MEDIA_PATH . IMAGES_PATH;
        $this->menu_bar = <<< MENUBAR
    <header class="header-main">
        <div class="header-main-logo">
        <img src="$image" alt="Ames Goldsmith logo">
        <form method="post" action="$landing_page">
        
            <nav class="header-main-nav">
                <ul>
                    <li><button class="header" type="submit" name="route" value="home">Home</button>
                    </li>
                    <li><button class="header" type="submit" name="route" value="login">Login </button>
                    </li>
                    <li><button class="header" type="submit" name="route" value="create">Create </button>
                    </li>
                    <li><button class="header" type="submit" name="route" value="matrix">Matrix </button>
                    </li>
                    <li><button class="header" type="submit" name="route" value="training_home">Training </button>
                    </li>
                </ul>
            </nav>
            </form>
        </div>
    </header>
MENUBAR;
    }

    private function createAdminMenuBar()
    {

        $landing_page = APP_ROOT_PATH;
        $image = MEDIA_PATH . IMAGES_PATH;
        $this->menu_bar = <<< MENUBAR
    <header class="header-main">
        <div class="header-main-logo">
        <img src="$image" alt="Ames Goldsmith logo">
        <form method="post" action="$landing_page">
        
            <nav class="header-main-nav">
                <ul>
                    <li><button class="header" type="submit" name="route" value="home">Home</button>
                    </li>
                    <li><button class="header" type="submit" name="route" value="login">Login </button>
                    </li>
                    <li><button class="header" type="submit" name="route" value="create">Create </button>
                    </li>
                    <li><button class="header" type="submit" name="route" value="matrix">Matrix </button>
                    </li>
                    <li><button class="header" type="submit" name="route" value="training_home">Training </button>
                    </li>
                </ul>
            </nav>
            </form>
        </div>
    </header>
MENUBAR;
    }



    protected function createWebPageFooter()
    {
        $html_output = <<< HTML
</body>
</html>
HTML;
        $this->html_page_output .= $html_output;
    }
}
