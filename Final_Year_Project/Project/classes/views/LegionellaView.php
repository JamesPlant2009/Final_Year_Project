<?php
class LegionellaView extends WebPageTemplateView
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
                <h1>Legionella Awareness</h1>
                <p id="background">
Legionellosis is the collective name given to the pneumonia-like illness caused by Legionella bacteria that is common in natural water sources such as rivers, lakes and reservoirs, but in low amounts. Therefore they can contaminate and grow in purpose-built water systems.  Legionnaires’ disease is a potentially fatal form of pneumonia and everyone is susceptible to infection.  However, some people are at higher risk, including: 
<br><br>
•	People over 45 years of age.
<br><br>
•	Smokers and heavy drinkers.
<br><br>
•	People suffering from chronic respiratory or kidney disease.
<br><br>
•	Anyone with an impaired immune system.
<br><br>
Legionnaires’ disease is caught by breathing in small droplets of contaminated water that is released into the air by cooling towers, showers, or air conditioning systems, often spreading into the surrounding area.

                </p>
                <br><br>
                <h2>Identifying Risks.</h2>
                <p id="importance">
Are there legionella risks in my workplace?
<br><br>
Any water systems that have the right environmental conditions could potentially be a source for Legionella bacteria growth. There is a reasonably foreseeable Legionella risk with your water system if:
<br><br>
•	Water is stored or re-circulated as part of your system.
<br><br>
•	The water temperature in all or some part of the system is between 20–45 °C.
<br><br>
•	There are sources of nutrients such as rust, sludge, scale and organic matters.
<br><br>
•	Conditions such as Dead legs in old systems left after pipework alterations are likely to encourage bacteria to multiply.
<br><br>
•	If it is possible for water droplets to be produced e.g. showers and aerosols from cooling towers.
<br><br>

                </p>
                <br><br>
                <h2>Responsibilities for employers.</h2>
                <p id="Regualtions">
Employers requirements:
<br><br>
•	Identify and assess sources of risk from Legionnaires’.
<br><br>
•	Prepare a course of action for preventing or controlling any risk.
<br><br>
•	Implement, manage, and monitor the scheme.
<br><br>
•	Keep records and check that what has been done is effective.
<br><br>
•	If appropriate, notify the local authority that they have a cooling tower on site.
</p>
                <br><br>
                <h2>Questions:</h2>
                <br>
                <form method="post" action="">
                    <label for="text"> 1.What is the temperature range that Legionella bacteria can survive in?</label>
                    <br>
                    <select name="question_1" id="question_1">
                        <option value="none">none</option>
                        <option value="none">test</option>
                        <option value="none">test2</option>
                        <option value="none">test3</option>
                    </select>
                    <br><br>
                    <label for="text">2.How is Legionnaires disease contracted?</label>
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
                    <button class ="training-button" type="submit" name="route" value="legionella_answer">Submit</button>
            </div>
        </body>
    </main>
HTMLFORM;
    }
}