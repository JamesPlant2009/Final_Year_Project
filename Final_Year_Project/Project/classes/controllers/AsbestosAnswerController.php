<?php
class AsbestosAnswerController extends ControllerAbstract
{

    public function createHtmlOutput()
    {
        $view = Factory::buildObject('AsbestosAnswerView');
        $view->createForm();
        $this->html_output = $view->getHtmlOutput();
    }
}
