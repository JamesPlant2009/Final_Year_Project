<?php
class COSHHView extends WebPageTemplateView
{
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
                <h1>COSHH Awareness</h1>
                <p id="background">
COSHH stands for The Control of Substances Hazardous to Health Regulations. 
Almost all organisations will buy, use or produce hazardous substances, from cleaning solutions to highly toxic chemicals. 
Everyone should know about the implications of COSHH at work.
                </p>
                <br>
                <h2>Importance.</h2>
                <p id="importance">
Every year, thousands of workers are made ill by hazardous substances, contracting lung diseases such as asthma, cancer, and skin disease such as dermatitis.<br><br>
Most businesses use substances or products that are mixtures of substances. Some processes create substances. These could harm employees, contractors, and other people. Substances such as cement, plaster, adhesives, solvents, paints, and fuels all pose a risk.

                </p>
                <br>
                <h2>Regualtions.</h2>
                <p id="Regualtions">
The Control of Substances Hazardous to Health Regulations (COSHH for short), place duties on employers and employees. 
They set out a sensible step by step approach for the control of hazardous substances and for protecting people exposed to them.
                </p>
                <br>
                <h2>Guidance</h2>
                <br>
                <p id="Guidance">
                    <h3>Where is asbestos commonly found:</h3>
                    <br>
•	Manufacturers and suppliers must provide information to enable COSHH assessments to be done.
<br>
•	Classifications include caution, toxic, flammable, explosive, oxidising, corrosive, gases under pressure, long term health hazards and dangerous for the environment.
<br>
•	Employers (and self-employed) have to introduce control measures appropriate to the assessment.
<br>
•	The best control measure is elimination: use something less hazardous.
<br>
•	The last resort control measure is PPE i.e. gloves, goggles, overalls etc.
<br>
•	Employers must inform and instruct employees about the risks and provide training on the precautions to be taken.
<br>
•	Employers must monitor the use of the substance and check that controls are adequate and if necessary, arrange medical checks for workers.
<br>
•	Employees must use any control measures provided
<br>
•	Employees must use any PPE provided; in the way it was intended.
<br>
•	Employees must use any washing, changing, eating accommodation provided as required.
<br>
•	Take reasonable care of your health and safety and that of others. 
<br>
•	Read labels on packaging and follow the instructions carefully.
<br>
•	Tell your supervisor immediately if you are unsure about a substance or if you have a health problem.
<br>

                </p>
                <br>
                <h2>Summary:</h2>
                <br>
                <p id="Summary">
A COSHH assessment should be carried out for all hazardous substances used or created in your work activities, and all control measures should be followed. 
Safety data sheets and risk assessments for all products can be found in the health and safety folder on the server.
                </p>
                <br><br>
                <h2>Questions:</h2>
                <br>
                <form method="post" action="">
                    <label for="text"> 1.What does COSHH stand for?</label>
                    <br>
                    <select name="question_1" id="question_1">
                        <option value="none">none</option>
                        <option value="none">test</option>
                        <option value="none">test2</option>
                        <option value="none">test3</option>
                    </select>
                    <br><br>
                    <label for="text">2.What are examples PPE that would be used in various scenarios e.g., dusty environments</label>
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
                    <button class ="training-button"type="submit" name="route" value="COSHH_answer">Submit</button>
            </div>
        </body>
    </main>
HTMLFORM;
    }


}
