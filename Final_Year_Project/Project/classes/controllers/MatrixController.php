<?php
class MatrixController extends ControllerAbstract
{
    private static $searchHandled = false;
    public function createHtmlOutput()
    {
        $route = $this->getRoute();
        if ($route == "matrix") {
            $this->buildMatrixView();
        }
        elseif ($route == "matrix_search" && !self::$searchHandled){
            self::$searchHandled = true;
            $this->handleSearch();
        }
    }


    private function getRoute()
    {
        return $_POST['route'] ?? $_GET['route'];
    }

    private function buildMatrixView()
    {
        $view = Factory::buildObject('MatrixView');
        $database = Factory::createDatabaseWrapper();
        $model = Factory::buildObject('MatrixModel');
        $model->setDatabaseHandle($database);
        $view->createForm();
        $this->html_output = $view->getHtmlOutput();
    }

    private function handleSearch()
    {
        $model = Factory::buildObject('MatrixModel');
        $database = Factory::createDatabaseWrapper();
        $model->setDatabaseHandle($database);
        $model->setUserID($_POST['user_id']);
        $model->getDatesAndCoursesFromID();
        $view = Factory::buildObject('MatrixView');
        $view->createForm();
        $view->displayResults($model->getResults());
        $this->html_output = $view->getHtmlOutput();

    }


}
