<?php
class EnviromentAnswerView extends WebPageTemplateView
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
                <h1>Environmental Awareness </h1>
                <p id="background">
The purpose of this training is to educate awareness of environmental issues such as pollution and waste management. 
The aim is that everyone will understand their responsibility and follow practices to legal requirements and protect the environment.
                </p>
                <br>
                <h2>Background.</h2>
                <p id="importance">
Work can generate a lot of waste, including hazardous waste and it also has an impact on the environment in some way, whether it’s positive or negative. Work activity can lead to air, land and water pollution, there are laws in place to protect the environment and they are strictly enforced.<br><br>
Some plant and animal life are also protected by law such as some species of birds and bats. Examples of plants include some types of moss, lichen and orchids, while trees can have TPO’s Tree Preservation Orders on them.

                </p>
                <br>
                <h2>What you need to know.</h2>
                <p id="Regualtions">
1.	You need to know the arrangements for managing waste on the site (location of bins / bins, segregation, hazardous waste, etc.).
<br><br>
2.	Only registered waste carriers can collect waste from site, all parties involved have a duty of care.
<br><br>
3.	You need to know the procedure for dealing with spills and environmental emergencies.
<br><br>
4.	You must know what you can and cannot do regarding disposal of workplace production byproducts and general production materials.
<br><br>

                </p>
                <br>
                <h2>What you need to do.</h2>
                <br>
                <p id="Guidance">
1.	Always put waste in the waste bins, don’t let it accumulate anywhere or elsewhere.
<br><br>
2.	Take the extra few seconds and put waste in the rights bins (don’t mix it).
<br><br>
3.	If you are involved in the collection of waste, you must receive a waste transfer notes and hand to management.
<br><br>
4.	If bins are full or they are not being used appropriately – report it to management. Full bins can increase vermin such as rats.
<br><br>
5.	Store liquids on bunds. Drip trays must be emptied regularly in accordance with site arrangements (waste oil / fuel waste collection points).
<br><br>
6.	Clean spills up immediately using the appropriate spill kit and deposit used materials in accordance with site arrangements.
<br><br>
7.	Report any shortfall in the arrangements and any incidents or concerns regarding waste management, the presence of protected species or pollution.
<br><br>
8.	Do not put waste items and liquids down the drain as this can effect waterways; always dispose of such waste appropriately.
ked before any building or maintenance works are commenced.
                </p>
                <br><br>
                <h2>Summary:</h2>
                <br>
                <p id="Summary">
                    Asbestos is harmful if disturbed, exposure to asbestos fibres can be fatal and lead to a slow and painful death.
                    If you suspect asbestos, stop work and tell your supervisor immediately.
                </p>
                <br><br>
               <h2>Answers:</h2>
                <br>
                <h2>1.What documentation is required for those who are involved in the collection of waste?</h3>
                <h3>Answer: test3</h3>
                <br><br>
                <h2>2.What is a key points regarding waste management?</h3>
                    <h3>Answer: test3</h3>
                <br><br>
                <form method="post" action="">
                <br><br>
                <button class ="training-button" name="route" value="training_home">Training Home</button>
                </form>
            </div>
        </body>
    </main>
HTMLFORM;
    }
}

