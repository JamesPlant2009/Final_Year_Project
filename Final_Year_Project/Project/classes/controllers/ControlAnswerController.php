<?php
class ControlAnswerController extends ControllerAbstract
{

    public function createHtmlOutput()
    {
        $view = Factory::buildObject('ControlAnswerView');
        $view->createForm();
        $this->html_output = $view->getHtmlOutput();
    }
}