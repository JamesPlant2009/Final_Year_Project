<?php
class DermatitisView extends WebPageTemplateView
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
                <h1>Deratitis</h1>
                <p id="background">
Contact dermatitis is a type of eczema triggered by contact with a particular substance.
<br><br>
Eczema is the name for a group of non-contagious conditions that cause skin to become dry and irritated. Approximately 1 in 12 adults in the UK suffer with some form of eczema.
<br><br>
Other symptoms of dermatitis can include pain or itching, blisters, cracked skin. There can also be a change in skin colour – lighter skin can become red, and darker skin can darken further or turn purple / grey.
<br><br>
Usually the symptoms affect the hands, especially under rings and between fingers, and face but can affect anywhere. It will typically happen within a few hours of exposure to the irritant. 
<br><br>
These symptoms can have a huge impact on a person’s life, they can lead to sleeplessness, anxiety, depression and other mental health conditions. 
<br><br>
Occasionally areas affected can become infected, you might then get discharge or weeping from the skin, an increased level of pain, feeling generally unwell or feeling hot or shivery. If you have these symptoms, you should see a GP as soon as possible, you may need antibiotics.
<br><br> 

                </p>
                <br>
                <h2>Causes of dermatitis</h2>
                <p id="importance">
Irritant contact dermatitis is caused by things that dry out and damage the skin such as: 
<br><br>
•	Detergents
<br>
•	solvents
<br>
•	oils 
<br>
•	prolonged or frequent contact with water. 
<br><br>
Allergic contact dermatitis occurs when a person develops an allergy to something that comes into contact with their skin.
<br><br>
Products that cause contact dermatitis will be found on the CoSHH register and have the appropriate MSDS available which will help mitigate against the risks of developing this condition.
<br><br>
If you already have symptoms of dermatitis, you may find it beneficial to wear cotton gloves under rubber gloves to help keep your skin dry. 
<br><br>

                </p>
                <br>
                <h2>How to avoid Dermatitis.</h2>
                <p id="Regualtions">
The best way to prevent dermatitis is to: 
<br><br>
•	Avoid contact with known allergens or irritants that cause your symptoms.
<br><br>
•	Follow all control measures and training provided - all products/materials that cause dermatitis will have a relevant risk assessment with appropriate control measures in place. 
<br><br>
•	Wear the appropriate, supplied PPE e.g. gloves, aprons, masks, lab coats, overalls etc…
If you do come into contact with an allergen or irritant, you should wash your hands thoroughly with warm water as soon as possible. 
<br><br>
Keeping your hands moisturised can help prevent them becoming dry, use a good quality emollient (moisturiser) or speak to a pharmacist. 
<br><br>

                </p>
                <br>
                <h2>What should you do if you develop Dermatitis.</h2>
                <br>
                <p id="Guidance">
Speak to Management as soon as possible, so we can try to identify the cause. 
<br><br>
You may need to see your GP if:
<br><br>
•	You have persistent, recurrent, or severe symptoms
<br><br>
•	You cannot identify the substance causing of the dermatitis
<br><br>
In case of severe symptoms your GP may prescribe topical corticosteroids and in rare instances oral corticosteroids. 

                </p>
                <br>
                <br><br>
                <h2>Questions:</h2>
                <br>
                <form method="post" action="">
                    <label for="text"> 1.List 2 items, materials or products in your workplace that could cause Dermatitis.</label>
                    <br>
                    <select name="question_1" id="question_1">
                        <option value="none">none</option>
                        <option value="none">test</option>
                        <option value="none">test2</option>
                        <option value="none">test3</option>
                    </select>
                    <br><br>
                    <label for="text">2.Name PPE that is issued in your workplace that can help prevent Dermatitis.</label>
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
                    <button class ="training-button" type="submit" name="route" value="dermatitis_answer">Submit</button>
            </div>
        </body>
    </main>
HTMLFORM;
    }
}

