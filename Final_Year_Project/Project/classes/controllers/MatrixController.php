<?php
class MatrixController extends ControllerAbstract
{

    public function createHtmlOutput()
    {

    }

    private function createMatrixView()
    {
        $view = Factory::buildObject('MatrixView');
        $database = Factory::createDatabaseWrapper();
        $model = Factory::buildObject('MatrixModel');
        $model->setDatabaseHandle($database);
        $user = $model->getInfo();
        $view->setInfo($user);
        $view->createForm();
        $this->html_output = $view->getHtmlOutput();
    }
}
