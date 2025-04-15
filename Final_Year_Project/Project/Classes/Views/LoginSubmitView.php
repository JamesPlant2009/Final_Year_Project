<?php

/** LoginSubmitView.php
 * View portion of the final login section. Only displays a message relating to login status.
 */
class LoginSubmitView extends WebPageTemplateView
{
    public function __construct()
    {
        parent::__construct();
    }

    // Templated
    public function __destruct() { }

    public function createPage()
    {
        $this->setPageTitle(); // Run page title function.
        $this->createWebPage(); // Run template function.
        $this->addContent(); // Run to create required HTML for page.
        $this->createWebPageFooter(); // Run template function.
    }

    // Used for returning HTML back to Controller.
    public function getHtmlOutput(): string
    {
        return $this->html_page_output;
    }

    public function setPageTitle() // Set the page title.
    {
        $this->page_title = 'CryptoShow: Logged In!';
    }

    private function isLoggedIn() : string
    {
        if(isset($_SESSION['loggedin'])){
            return 'You have been logged in as ' . $_SESSION['username'] . '!';
        } else {
            return "Incorrect details! Account not found or password incorrect.";
        }
    }

    private function addContent() : void
    {
        $address = APP_ROOT_PATH;
        $loggedin = $this->isLoggedIn();
        $html_output = <<< HTML
<main>
    <section class="view-events-main">
        <br />
        <br />
        <br />
        <h1>$loggedin</h1>
    </section>
</main>
HTML;
        $this->html_page_output .= $html_output;

    }
}