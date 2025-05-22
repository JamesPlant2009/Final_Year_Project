<?php
class TrainingHomeView extends WebPageTemplateView
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
        $this->pagetitle = "Training Home";
    }

    private function createPageBody()
    {
        $address = APP_ROOT_PATH;
        $info_text = 'this is a test';
        $page_heading = 'Training Home page';
        $this->html_page_content = <<< HTMLFORM
    <div class="training-home">
        <h1>Choose Your training document</h1>
        <br><br>
        <form method="post" action=""> 
        <button class="training-home-button" name="route" value="asbestos"> Asbestos Awareness</button>
        </form>
        
        <form method="post" action="">
        <button class="training-home-button" name="route" value="control">Control of Contractors & Visitors</button>
        </form>
        
        <form method="post" action="">
        <button class="training-home-button" name="route" value="COSHH">COSHH Awareness</button>
        </form>
        
        <form method="post" action="">
        <button class="training-home-button" name="route" value="dermatitis">Dermatitis Awareness</button>
        </form>
        
        <form method="post" action="">
        <button class="training-home-button" name="route" value="electric">Electrical Safety Awareness</button>
        </form>
        
        <br><br>
        
        <form method="post" action="">
        <button class="training-home-button" name="route" value="enviroment">Environmental Awareness</button>
        </form>
        
        <form method="post" action="">
        <button class="training-home-button" name="route" value="fm">Fire Marshal Awareness</button>
        </form>
        
        
        <form method="post" action="">
        <button class="training-home-button" name="route" value="hp">Hand Pallet Truck Awareness</button>
        </form>
        
        <form method="post" action="">
        <button class="training-home-button" name="route" value="legionella">Legionella Awareness</button>
        </form>
        
        <br><br>
        
        <form method="post" action="">
        <button class="training-home-button" name="route" value="mh">Manual Handling Awareness</button>
        </form>
        
    </div>
HTMLFORM;
    }
}