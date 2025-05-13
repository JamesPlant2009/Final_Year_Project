<?php

class MatrixView extends WebPageTemplateView
{



    public $results = [];


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



    private function setPagetitle()
    {
        $this->pagetitle = "Login";
    }



    private function createPageBody()
    {
        $address = APP_ROOT_PATH;


        $html = <<< HTMLFORM
        <body>
        <h1 class="ch">Training Matrix</h1>
            <form class="form" method="post" action="$address">
                <label class="account-label" for="text">User ID</label>
                <br>
                <input class="account-input" type="text" id="user_id" name="user_id" placeholder="User ID">
                <br><br>
                <button class="account-button" type="submit" name= "route" value="matrix_search">Let's Go</button>
                
            </form>

        <h3 class = "ch">Expiriation dates for the courses below</h3>
        <table class ="Table">
            <thead>
                <tr>
                    <th>Course</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
            
        </body>
HTMLFORM;
        $this->displayResults($this->results);

        $this->html_page_content = $html;
    }
    public function displayResults($results)
    {



        foreach ($results as $row) {
            $course = htmlspecialchars($row['course']);
            $date = htmlspecialchars($row['date']);

            $this->html_page_output .= <<<HTML
            <tr class="Table">
                <td>{$course}</td>
                <td>{$date}</td>
            </tr>
HTML;
        }




    }
    public function getHTMLOutput()
    {
        return $this->html_page_output;
    }





}


