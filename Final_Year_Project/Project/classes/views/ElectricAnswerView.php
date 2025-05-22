<?php
class ElectricAnswerView extends WebPageTemplateView
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
                <h1>Electrical Safety Awareness</h1>
                <p id="background">
Electrical hazards are present in most workplaces, from services within buildings, electrical tools, equipment used, underground services, and overhead services.
                </p>
                <br>
                <h2>Importance.</h2>
                <p id="importance">
Accidents involving electricity are often fatal. Not only can electricity kill you directly, but electrical failure can also cause fires, putting everyone within a building or site at risk.
                </p>
                <br>
                <h2>Regualtions.</h2>
                <p id="Regualtions">
The Electricity at Work Regulations is the main law covering electricity, but other relevant regulations include Supply of Machinery (Safety) Regulations, Electrical Equipment (Safety) Regulations and the Management of Health and Safety at Work Regulations.
                </p>
                <br>
                <h2>Guidance</h2>
                <br>
                <p id="Guidance">
•	Understanding how electrical equipment is designed to be safe helps us to spot when things are wrong and therefore dangerous.
<br><br>
•	All metal parts designed to carry current (conductors) need to be properly insulated. If the insulation is vulnerable it has to be additionally protected – sheathing, conduit, trunking, armoured cable etc may be used.
<br><br>
•	If you can see defective insulation or sheathing (eg. flex out of a plug, split cable), the system is not safe and should be isolated and immediate steps taken to get it repaired by a competent person. NOTE: Sometimes conductors are made safe by placing them out of reach. This is OK until unusual circumstances (eg. maintenance or decorating work) make them not out of reach. Take special care in such cases.
<br><br>
•	Earthing all metal parts not intended to carry current will prevent them from becoming live in a fault situation. Earth wires and connectors are just as important as the circuit wires and any damage or looseness must be repaired urgently by a competent person.
<br><br>
•	Earthing works in conjunction with the fuse or circuit breaker to protect the circuit in the event of excessive current. If a wrong size fuse is fitted, or the circuit breaker is tampered with, the protection may not be adequate.
<br><br>
•	In high-risk environments like construction sites, either the voltage has to be reduced to a safe level (110v), or the fault current should be limited by a Residual Current Device (RCD). NOTE: These devices do not prevent electric shock, only that the shock is unlikely to be fatal. In damp or sweaty conditions, the shock could still be severe so do not be lulled into a false sense of security.
<br><br>
•	All portable electric equipment should be tested regularly for 3 years for office and 12 months for Lab/Workshop equipment

                </p>
                <br>
                <h2>Summary:</h2>
                <br>
                <p id="Summary">
Check for signs of damage to equipment and cables, if in doubt have the circuit/equipment checked by an electrician before starting work. Report concerns to management.
                </p>
                <br><br>
               <h2>Answers:</h2>
                <br>
                <h2>1.What does COSHH stand for?</h3>
                <h3>Answer: test1</h3>
                <br><br>
                <h2>2.What are examples PPE that would be used in various scenarios e.g., dusty environments</h3>
                    <h3>Answer: test1</h3>
                <br><br>
                <form method="post" action="">
                <br><br>
                <button class ="training-button" type="submit" name="route" value="training_home">Training Home</button>
                </form>
            </div>
        </body>
    </main>
HTMLFORM;
    }
}

