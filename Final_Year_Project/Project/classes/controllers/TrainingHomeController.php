<?php

class TrainingHomeController extends ControllerAbstract
{
    public function createHtmlOutput()
    {
        $view = Factory::buildObject('TrainingHomeView');
        $view->createForm();
        $this->html_output = $view->getHtmlOutput();
    }


}