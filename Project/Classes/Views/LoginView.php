<?php

namespace Views;

use Framework\WebPageTemplateView;

/** LoginView.php
 *
 * View section of the MVC for the first half of the login process.
 *
 *
 * @author James Plant - JamesPlant2009@gmail.com
 * @package cryptoshow
 */
class LoginView extends WebPageTemplateView
{

    public function __construct()
    {
        parent::__construct();
    }

    public function __destruct()
    {
    }

    /**
     * Used for basic View function, running other functions and setting up the page.
     * @return void
     */
    public function createPage(): void
    {
        $this->setPageTitle(); // Run to set Page / Tab title
        $this->createWebPage(); // Template function for the format and for headers.
        $this->addContent(); // Run for actual page generation.
        $this->createWebPageFooter();
    }

    /**
     * Used only in Controller for retrieving the modified HTML from the View.
     * @return string Returns the HTML.
     */
    public function getHtmlOutput(): string
    {
        return $this->html_page_output;
    }

    /**
     * Sets the page title.
     * @return void
     */
    public function setPageTitle()
    {
        $this->page_title = 'CryptoShow: Login';
    }

    /**
     * Adds the content to the html_output.
     * Specifically, adds a form that allows for the user to login.
     * @return void
     */
    private function addContent(): void
    {
        $address = APP_ROOT_PATH;
        $html_output = <<< HTML
        <main class="event-main">
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
          <main id="loginMain">
            <div class="form-div">
                <form method="post" action="$address">
                    <label for=Name">Enter your Username</label>
                    <input id="Name" name="username" type="text" />
                    <label for="Password">Enter your Password</label>
                    <input id="Password" name="pwd" type="password" />
                    <button type="submit" name="route" value="login-submit">Login</button>
                </form>
            </div>
        </main>
HTML;
        $this->html_page_output .= $html_output;
    }

}
