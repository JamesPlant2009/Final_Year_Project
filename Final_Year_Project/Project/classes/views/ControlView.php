<?php
class ControlView extends WebPageTemplateView
{
    public function __construct()
    {
        parent::__construct();
    }

    public function __destruct()
    {
    }

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

    private function createPageBody()
    {
        $address = APP_ROOT_PATH;
        $info_text = 'this is a test';
        $page_heading = 'Login';
        $this->html_page_content = <<< HTMLFORM
    <main>
        <body>
            <br><br>
            <div class="training-div">
                <h1>Visitor & Contractor Control Awareness</h1>
                <p id="background">
                Many people who are not employees of a company will visit their sites. It’s vital to make sure that while visiting or working on sites, 
                these people work safely and do not put you in danger. They must also have enough understanding of your operations that they do not put 
                themselves at risk of being injured.
                </p>
                <br>
                <h2>Controls.</h2>
                <p id="importance">
Visitors and Contractors to sites could be a danger to themselves and employees if they are not properly controlled/supervised. This is why all Visitors and Contractors must report to reception on arrival and be given rules which they must follow while they are on the site.
<br>
•	No visitor may enter the site without prior approval of site management.
<br>
•	All visitors and contractors must sign the visitors’ board/book.
<br>
•	Visitors and contractors are required to inform site management when they are ready to leave site
<br>
•	Visitors and contractors are advised to be aware of nearby vehicles moving in all areas. They must keep clear of heavy vehicles, and remember that caution is necessary at all times.
<br>
•	Appropriate PPE should be worn
<br>
•	Visitors and contractors must comply with all traffic signs and speed limits displayed.
<br>
•	Visitors and contractors must not enter any Plant/Lab areas without the permission of the management.
<br>
•	Visitors and contractors must not touch or interfere with any item of plant at any time.
<br>
•	Visitors and contractors must familiarise themselves with the site specific rules.
<br>
•	Visitors and contractors must be fully inducted.
<br>
•	All contractors should be approved and on the approve supplier list.
<br>
•	Contractors must provide pre-qualification documents including insurance, RAMS (Risk Assessment and Method Statements), and evidence of training. These will be certified by the Compliance manager or the UK Operations Manager
<br><br><br>

Challenge any persons un-known to you to ensure correct procedure has been followed.

                </p>
                <br><br>
                <h2>Questions:</h2>
                <br>
                <form method="post" action="">
                    <label for="text"> 1.What documentation must contractors provide before they can carry out work on site?</label>
                    <br>
                    <select name="question_1" id="question_1">
                        <option value="none">none</option>
                        <option value="none">test</option>
                        <option value="none">test2</option>
                        <option value="none">test3</option>
                    </select>
                    <br><br>
                    <label for="text">2.What must Contractors do before they leave site?</label>
                    <br>
                    <select name="question_2" id="question_2">
                        <option value="none">none</option>
                        <option value="none">test</option>
                        <option value="none">test2</option>
                        <option value="none">test3</option>
                    </select>
                    <br><br>
                    <label for="expiry">Please enter the date of completion + 2 years</label>
                    <input type="date" id="expiry" name="expiry">
                    <br><br>
                    <button class ="training-button" type="submit" name="route" value="control_answer">Submit</button>
            </div>
        </body>
    </main>
HTMLFORM;
    }

}
