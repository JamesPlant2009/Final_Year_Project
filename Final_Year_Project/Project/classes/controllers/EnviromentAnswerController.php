<?php

class EnviromentAnswerController extends ControllerAbstract
{

    public function createHtmlOutput()
    {
        $view = Factory::buildObject('EnviromentAnswerView');
        $view->createForm();
        $this->html_output = $view->getHtmlOutput();
    }

}