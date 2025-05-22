<?php



class LoginView extends WebPageTemplateView
{
    protected $error_message;
    public function __construct()
    {
        parent::__construct();
    }

    public function __destruct(){}

    public function createForm()
    {
        $this->setPagetitle();
        $this->createPageBody();
        $this->createWebPage();
        $this->createWebPageFooter();
    }

    public function getHTMLOutput()
    {
        return $this->html_page_output;
    }

    private function setPagetitle()
    {
        $this->pagetitle = "Login";
    }

    public function setErrorMessage($error_message)
    {
        $this->error_message = $error_message;
    }

    private function createPageBody()
    {
        $address = APP_ROOT_PATH;
        $info_text = 'this is a test';
        $page_heading = 'Login';
        $errorMessage = $this->error_message ? "<p class='error-message'>$this->error_message</p>" : "";
        $this->html_page_content = <<< HTMLFORM
        <br><br>
        <div class = "form">
            <h1>Hello There, Please log in</h1>
            <br><br>
            <form method="POST" action="$address">
                <label class="account-label" for="email">Email</label>
                <br>
                <input class="account-input" type = "email" id ="email" name="email" placeholder="Email">
                <br><br>
                <label class="account-label" for="password">Password</label>
                <br>
                <input class="account-input" type = "password" id ="password" name="password" placeholder="Password">
                <br><br>
                <button class="account-button" type="submit" name="route" value="login_submit">Let's Go</button>
                {$errorMessage}
                
                
            </form>
        </div>
HTMLFORM;
    }




}
