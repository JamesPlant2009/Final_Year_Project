<?php
class LegionellaAnswerController extends ControllerAbstract
{

    public function createHtmlOutput()
    {
        $view = Factory::buildObject('LegionellaAnswerView');
        $view->createForm();
        $this->html_output = $view->getHtmlOutput();
    }
}
