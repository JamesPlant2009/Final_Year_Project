<?php
/**
 * WebPageTemplateView.php  * Sessions: PHP web application to demonstrate how databases
 * are accessed securely
 *
 *
 * @author CF Ingrams - cfi@dmu.ac.uk
 * @copyright De Montfort University
 *
 * @package petshow
 */
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="$css_filename" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Language" content="en-gb" />
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
        $menu_option_buttons = '';
        $menu_option_buttons  = '<button class="header" name="route" value="home">Home</button>';
        $menu_option_buttons .= '&nbsp;&nbsp;';
        $menu_option_buttons .= '<button class="header" name="route" value="create">Create</button>';
        $menu_option_buttons .= '&nbsp;&nbsp;';
        $menu_option_buttons .= '<button class="header" name="route" value="training_home">Training</button>';
        $menu_option_buttons .= '&nbsp;&nbsp;';
        $menu_option_buttons .= '<button class="header" name="route" value="matrix">Matrix</button>';
        $menu_option_buttons .= '&nbsp;&nbsp;';
        $menu_option_buttons .= '<button class="header" name="route" value="login">Login</button>';
        $menu_option_buttons .= '&nbsp;&nbsp;';
        $landing_page = APP_ROOT_PATH;
        $this->menu_bar = <<< MENUBAR
    <header class="header-main">
        <div class="header-main-logo">
        <form method="post" action="$landing_page">
            <img src="C:\Users\James\PhpstormProjects\Final_Year_Project\Project\media\pictures\logo2.PNG" alt="Ames Goldsmith logo"></img>
            <nav class="header-main-nav">
            $menu_option_buttons
            </form>
            </nav>
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
