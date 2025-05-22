<?php
class MHView extends WebPageTemplateView
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
                <h1>Manual Handling Awareness</h1>
                <p id="background">
Manual handling is the movement of loads including lifting, lowering, putting down, pushing, pulling, carrying, or moving, by hand
or by bodily force. Awkward postures, poor lifting techniques, 
and failing to route plan will all increase the risk of injury during manual handling tasks.
                </p>
                <br>
                <h2>Importance.</h2>
                <p id="importance">
Manual handling is apparent in nearly every workplace in one form or another.
With manual handling being the leading cause of musculoskeletal disorders at work (over a third of all work-related illnesses),
it’s important to know how much you can safely lift and use good handling techniques.
                </p>
                <br>
                <h2>Regualtions.</h2>
                <p id="Regualtions">
The Manual Handling Operations Regulations cover manual handling at work. 
You should avoid the need for manual handling wherever possible, assess the risk, reduce the need by providing mechanical aids,
 and train staff in good manual handling techniques. Employees must make full use of anything provided in connection with
  manual handling, including following advice and training given.
                </p>
                <br>
                <h2>Guidance</h2>
                <br>
                <p id="Guidance">
<h3>Consider the task:</h3>
<br><br>
•	Avoid twisting the trunk
<br><br>
•	Avoid stooping or reaching upwards
<br><br>
•	Prevent holding away from the trunk
<br><br>
•	Avoid tasks that demand poor posture
<br><br>
•	Assess the frequent physical effort
<br><br>
•	Avoid excessive lifting or lowering
<br><br>
•	Prevent excessive carrying distances
<br><br>
•	Prevent excessive pushing or pulling
<br><br>
•	Avoid sudden movement of loads
<br><br>
•	Minimise prolonged physical effort
<br><br>
•	Allow for rest or recovery periods
<br><br>

<h3>Consider the individuals capacity:</h3>

<br><br>
•	Strength of individual
<br><br>
•	Knowledge of the load and task
<br><br>
•	Training and experience
<br><br>

<h3>Consider the load and give extra controls for:</h3>

<br><br>
•	Heavy loads
<br><br>
•	Bulky loads
<br><br>
•	Unstable loads
<br><br>
•	Difficult to grasp
<br><br>
•	Sharp edges
<br><br>
•	Hot or hazardous loads
<br><br>

<h3>Consider the working environment:</h3>

<br><br>
•	Restrictions preventing good posture
<br><br>
•	Uneven, slippery, unstable floors
<br><br>
•	Changes in floor level e.g. steps or ramps
<br><br>
•	A windy or dusty atmosphere
<br><br>
•	Overcrowding of workspaces
<br><br>
•	Extreme temperature changes
<br><br>
•	Physical obstructions
<br><br>
•	Poor lighting

                </p>
                <br>
                <h2>Summary:</h2>
                <br>
                <p id="Summary">
A risk assessment should be completed before high risk manual handling commences. 
Consider the task, the individual, the load and the environment. Always ask for assistance if needed.
                </p>
                <br><br>
                <h2>Questions:</h2>
                <br>
                <form method="post" action="">
                    <label for="text">1.What should you consider about the load before lifting?</label>
                    <br>
                    <select name="question_1" id="question_1">
                        <option value="none">none</option>
                        <option value="none">test</option>
                        <option value="none">test2</option>
                        <option value="none">test3</option>
                    </select>
                    <br><br>
                    <label for="text">2.Why should each manual handling activity be assessed?</label>
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
                    <button class ="training-button" type="submit" name="route" value="mh_answer">Submit</button>
            </div>
        </body>
    </main>
HTMLFORM;
    }
}