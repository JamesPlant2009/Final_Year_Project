<?php

use Framework\ControllerAbstract;
use Framework\Factory;

class LoginController extends ControllerAbstract
{

    public function createHtmlOutput(): void
    {
        $view = Factory::buildObject('LoginView');
        $view->createPage();
        $this->html_output = $view->getHtmlOutput();
    }

}
