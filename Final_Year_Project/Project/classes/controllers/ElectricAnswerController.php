<?php

class ElectricAnswerController extends ControllerAbstract
{

    public function createHtmlOutput()
    {
        $view = Factory::buildObject('COSHHAnswerView');
        $view->createForm();
        $this->html_output = $view->getHtmlOutput();
    }

}