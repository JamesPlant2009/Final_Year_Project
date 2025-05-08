<?php
class CreateView extends WebPageTemplateView
{
    public $error;
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
    }

    public function getHTMLOutput()
    {
        return $this->html_page_output;
    }

    private function setPagetitle()
    {
        $this->pagetitle = "Login";
    }

    public function setError($error)
    {
        $this->error = $error;
    }

    private function createPageBody()
    {
        $address = APP_ROOT_PATH;
        $error = $this->error ? "<p class='error-message'>$this->error</p>" : "";
        $info_text = 'this is a test';
        $page_heading = 'Login';
        $this->html_page_content = <<< HTMLFORM
        <br><br>
        <div class = "form">
            <h1>Hello, Register an Account</h1>
            <form method="post" action="$address">
                <label class="account-label" for="text">First Name</label>
                <br>
                <input class="account-input" type="text" id="user_first_name" name="user_first_name" placeholder="First Name">
                <br><br>
                <label class="account-label" for="text">Last Name</label>
                <br>
                <input class="account-input" type="text" id="user_last_name" name="user_last_name" placeholder="Last Name">
                <br><br>
                <label class="account-label" for="text">Role</label>
                <br>
                <input class="account-input" type="text" id="user_role" name="user_role" placeholder="Role">
                <br><br>
                <label class="account-label" for="email">Email</label>
                <br>
                <input class="account-input"  type = "email" id ="user_email" name="user_email" placeholder="Email">
                <br><br>
                <label class="account-label" for="pwd">Password</label>
                <br>
                <input class="account-input"  type = "password" id ="user_password" name="user_password" placeholder="Password">
                <br><br>
                <button class="account-button" type="submit" name= "route" value="registered">Let's Go</button>
                {$error}
            </form>
        </div>
HTMLFORM;
    }


}
