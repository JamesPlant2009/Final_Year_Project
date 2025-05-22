<?php
class AsbestosAnswerView extends WebPageTemplateView
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
                <h1>Asbestos Awareness</h1>
                <p id="background">
                    Asbestos was used extensively in 
                    building materials from the 1950s and was eventually banned in the UK in 1999.
                     Any building built or refurbished within that period is likely to contain asbestos.
                </p>
                <br>
                <h2>Importance.</h2>
                <p id="importance">
                    Asbestos fibres can kill. Asbestos is the biggest cause of work-related deaths in the UK.
                     Each week nearly 40 tradesmen and each year 4500 people (from all industries) on average
                     die from what is known as the ‘hidden killer’.
                </p>
                <br>
                <h2>Regualtions.</h2>
                <p id="Regualtions">
                    The Control of Asbestos at Work Regulations place several requirements on employers,
                     to prevent reduce the risk of exposure occurring. One of these requirements is mandatory
                      training for anyone likely to be exposed to asbestos fibres at work.
                </p>
                <br>
                <h2>Guidance</h2>
                <br>
                <p id="Guidance">
                    <h3>Where is asbestos commonly found:</h3>
                    <br>
                    1.	Insulation and sprayed coatings used for: 
                    	Boilers, plant and pipework hidden in under-floor ducting; Fire protection to steelwork, hidden behind false ceilings;
                         Thermal and acoustic insulation of buildings; Some textured coatings and paints; Friction materials such as brake linings and clutch plates;
                          Gaskets and packing in engines, heating and ventilation systems.<br>
                    2.	Insulating board used in the following places: 
                    	Fire protection to doors, protected exits and steelwork; Claddings on walls and ceilings; Internal walls, partitions and suspended ceiling tiles.<br>
                    3.	Asbestos cement, which is found as:
                    	Corrugated roofing and cladding sheets of buildings; Flat sheets for partitions, cladding and door facings; Rainwater gutters and downpipes.
                        <br><br>
                    <h3>How Asbestsos can affect you:</h3>
                    <br>
                        Asbestos breaks into tiny, long, sharp fibres. They can scar the lungs, causing asbestosis or fibrosis. Asbestos fibres may also cause lung cancer.
                         It can also cause mesothelioma, a cancer of the inner lining of the chest wall. This cancer is incurable. Smokers are at a much greater risk of asbestos diseases.
                         <br><br>
                    <h3>Hazardous Works:</h3>
                    <br>
                    Plumbers, carpenters and electricians working on building repair are considered most at risk, however, all trades can come into contact with asbestos.
                    Buildings constructed or refurbished from the ’50s to the ’80s may contain asbestos materials, not banned in the UK until 1999.
                    We know asbestos is present in our premises notably in: Switch room, Floor tiles in k47, Ceiling panels K47, Roofs, Gutters, Down Pipes.
                    We should all of course be vigilant; not all asbestos may have been identified.
                    Our Asbestos register can be found in R: /hse/section10/asbestos <p class="answer">this should be checked before any building or maintenance works are commenced.</p>
                </p>
                <br>
                <h2>Summary:</h2>
                <br>
                <p id="Summary">
                    Asbestos is harmful if disturbed, exposure to asbestos fibres can be fatal and lead to a slow and painful death.
                    If you suspect asbestos, stop work and tell your supervisor immediately.
                </p>
                <br><br>
                <h2>Answers:</h2>
                <br>
                <h2>Question 1:Where is asbestos commonly found?</h3>
                <h3>Answer: test</h3>
                <br><br>
                <h2>Question 2:What should be done before any building or maintenance work takes place on a building?</h3>
                    <h3>Answer: test3</h3>
                <br><br>
                <form method="post" action="">
                <button class ="training-button" type="submit" name="route" value="training_home">Training Home</button>
                </form>
            </div>
        </body>
    </main>
HTMLFORM;
    }
}