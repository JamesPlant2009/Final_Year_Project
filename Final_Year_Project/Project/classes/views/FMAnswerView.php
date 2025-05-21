<?php
class FMAnswerView extends WebPageTemplateView
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
                <h1>Fire Marshal Awareness</h1>
                <p id="background">
The role of every organisation Fire Marshal(s) (also known as a Fire Warden) falls into two categories, one for day-to-day support: the other for incidents. In both instances the senior members of the organisation should provide support to the nominated Fire Marshal(s) and make it plain that they have authority to act. These roles should not be delegated and forgotten about; they are too important for that.
<br><br>
It is also worth remembering that everyone in an organisation has responsibility for fire prevention and safety. Everyone must carry out their job in a responsible manner that doesn’t do anything that might compromise fire related health and safety such as; letting combustible waste accumulate, blocking fire exits, smoking, mishandling flammable substances etc. Ultimately everyone shares the responsibility for fire safety, if it is not managed correctly, the consequences could be fatal. 
<br><br>
With the above in mind, let's look at the role and responsibilities of our Fire Marshals.

                </p>
                <br><br>
                <h2>Fire Marshal Responsibilities</h2>
                <p id="importance">
Fire Marshals must ensure that:
<br><br>
•	Fire Doors and Fire Exits are closed, clear, unlocked and ready for use
<br><br>
•	All escape routes are safe, unblocked and clear
<br><br>
•	Fire extinguishers are sealed and in the correct locations and have been serviced
<br><br>
•	There are fire safety signs and evacuation procedures are clearly in position
<br><br>
•	Fire alarms are clear and unobstructed.
<br><br>
•	Faulty emergency lighting is reported.
<br><br>
•	All weekly fire alarm tests are carried out and logged, and any faults reported.
<br><br>
•	All electrical equipment is PAT tested, and that testing is up to date
<br><br>
•	All persons with disabilities are facilitated in the event of an evacuation
<br><br>
•	Fire drill procedure is up to date and arrange annual fire drills
<br><br>
•	Storage is controlled, particularly where combustible material is involved. (Never put combustible material where there is a fixed source of ignition)
<br><br>
•	Signing in and out procedures for all staff and visitors is in place and being followed
<br><br>
•	All new employees have the correct induction, so they know the fire safety procedures, and where to go in the event of a ‘live’ alarm
<br><br>
Upon hearing the fire alarm:
<br><br>
•	Inform emergency services as required. It should never be assumed that an alarm is false or merely a test
<br><br>
•	Start the evacuation of your site in line with your evacuation procedures
<br><br>
•	Check that the site is empty, and everyone has left
<br><br>
•	Ensure everyone who is struggling to leave the area is assisted (be sure to check your policy and procedures)
<br><br>
•	Head to the fire assembly area
<br><br>
•	Take a register of your colleagues
<br><br>
•	Gather information from colleagues and other fire marshals
<br><br>
•	Check that everyone is accounted for 
<br><br>
•	Identify where the fire is and how it started
<br><br>
•	Document anything else of relevance for the fire service
<br><br>
•	Report the information to the fire officer in charge once they arrive

                </p>
                <br><br>
               <h2>Answers:</h2>
                <br>
                <h2>1.When is our fire alarm tested?</h3>
                <h3>Answer: test</h3>
                <br><br>
                <h2>2.What is the importance of staff and visitors signing in and out?</h3>
                    <h3>Answer: test</h3>
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
