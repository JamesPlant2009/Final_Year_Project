<?php
class HPAnswerController extends ControllerAbstract
{

    public function createHtmlOutput()
    {
        $view = Factory::buildObject('HPAnswerView');
        $view->createForm();
        $this->html_output = $view->getHtmlOutput();
    }
}
