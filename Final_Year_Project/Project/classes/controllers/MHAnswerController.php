<?php
class MHAnswerController extends ControllerAbstract
{

    public function createHtmlOutput()
    {
        $view = Factory::buildObject('MHAnswerView');
        $view->createForm();
        $this->html_output = $view->getHtmlOutput();
    }
}
