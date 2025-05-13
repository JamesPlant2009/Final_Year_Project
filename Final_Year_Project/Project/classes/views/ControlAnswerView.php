<?php
class ControlAnswerView extends WebPageTemplateView
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
                <h2>Answers:</h2>
                <br>
                <h2>1.What documentation must contractors provide before they can carry out work on site?</h3>
                <h3>Answer: test2</h3>
                <br><br>
                <h2>2.What must Contractors do before they leave site?</h3>
                    <h3>Answer: test3</h3>
                                    <form method="post" action="">
                <button class ="training-button" type="submit" name="route" value="training_home">Training Home</button>
                </form>
            </div>
        </body>
    </main>
HTMLFORM;
    }
}
