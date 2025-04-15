<?php

namespace Controllers;


use Framework\ControllerAbstract;

class IndexController extends ControllerAbstract
{
    public function createHtmlOutput()
    {
        $view = Factory::buildObject('IndexView');
        $view->createPage();
        $this->html_output = $view->getHtmlOutput();
    }
}
