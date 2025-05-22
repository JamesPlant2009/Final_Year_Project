<?php

class HomeController extends ControllerAbstract
{

    public function createHtmlOutput()
    {
        $view = Factory::buildObject('HomeView');
        $view->createForm();
        $this->html_output = $view->getHtmlOutput();
    }
}
