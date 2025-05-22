<?php
class HPView extends WebPageTemplateView
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
                <h1>Safe use of Hand Pallet Trucks Instruct</h1>
                <p id="background">
When we talk about safety within materials handling, we are not just referring to powered equipment. Manual equipment such as hand pallet trucks, which are commonly used in many businesses and various industries, can also provide a risk to safety. 
Please read below for advice on how to safely operate you hand pallet trucks.
                </p>
                <br>
                <h2>Pre-Use Guidance.</h2>
                <p id="importance">
Before an operation is to be undertaken, pre-use checks should be carried out.  This should be carried out before every use at the start of a working day.
<br><br><br>
Things to look for:
<br><br>
•	Visually inspect the truck for damage or cracks before each use. This should also be regularly documented and signed off by Management on a pre-use checklist form that your company keeps on record.
<br><br>
•	Raise the forks to check the hydraulic pump is in working order by pressing the lever downwards then operate the handle. Raise forks fully and look for any sign of hydraulic oil leaking.
<br><br>
•	Rotate handle to ensure wheels move freely and turning mechanism is without fault – DO NOT, put your fingers near the wheels for any reason.
<br><br>
•	Ensure routes are clear of obstruction and that the truck can be operated safely without fear of collision with other people or stock, shelving, or any other obstacles.

                </p>
                <br><br>
                <h2>Operation Instruction.</h2>
                <p id="Regualtions">
Once the ‘pre-use’ checks have been carried out, and the equipment is deemed safe, the operation can begin. Please read through the following step by step instructions to ensure you have the understanding required to operate the pallet truck.
<br><br>
How to operate the truck safely:
<br><br>
•	Before entering the pallet check the load is securely stacked and the pallet is not damaged. Carefully guide the forks into the gaps of the pallet by firmly gripping the handle with two hands and in the up-right position push steadily forwards.
<br><br>
•	Raise the forks ensuring there is sufficient space between you and the handle, once the pallet is clear of the floor, return the lever to the neutral position.
<br><br>
•	Ensure there is enough clearance when raising the forks; be aware of any overhead obstructions and any width restrictions.
<br><br>
•	Push the handle down, turn and face the direction you will be travelling. The direction you are turning will determine which hand to hold the truck with. When turning left use your left hand, when turning right use your right hand and grip the handle firmly.
<br><br>
•	Check around for pedestrians and other trucks; ensure your route is clear of obstructions. With the handle low, gently pull to start the truck moving with the forks trailing (behind you). Walk to one side of the truck, always travelling at a safe speed.
<br><br>
•	Always walk. Never run, make sharp turns or stand directly in front of the pallet truck when travelling. Never stand on the inside of a turn.
<br><br>
•	When travelling down a slope with the truck loaded keep the load facing down and control the speed by pulling back with both hands on the handle.
<br><br>
•	Once at your destination, manoeuvre the load into position, ensure you are clear of the load before lowering by slowly pulling on the lever, to lower the load under control.
<br><br>
•	When fully lowered release the lever into the neutral position. Check all around you, if clear, stand to one side and pull the hand pallet truck clear of the pallet.
<br><br>
                <h2>Questions:</h2>
                <br>
                <form method="post" action="">
                    <label for="text">1.Why are pre-use checks important?</label>
                    <br>
                    <select name="question_1" id="question_1">
                        <option value="none">none</option>
                        <option value="none">test</option>
                        <option value="none">test2</option>
                        <option value="none">test3</option>
                    </select>
                    <br><br>
                    <label for="text">2.What must you check and ensure before and during moving the pallet truck?</label>
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
                    <button class ="training-button" type="submit" name="route" value="hp_answer">Submit</button>
            </div>
        </body>
    </main>
HTMLFORM;
    }
}