<?php
class FMAnswerController extends ControllerAbstract
{

    public function createHtmlOutput()
    {
        $view = Factory::buildObject('FMAnswerView');
        $view->createForm();
        $this->html_output = $view->getHtmlOutput();
    }
}
