<?php
class LegionellaController extends ControllerAbstract
{
    public function createHtmlOutput()
    {
        $route = $this->getRoute();
        if ($route == "legionella") {
            $this->buildAsbestosView();
            ;

        }
        elseif ($route == "legionella_answer") {
            $this->handleAnswer();
        }
    }

    private function getRoute()
    {
        return $_POST['route'] ?? $_GET['route'];
    }

    private function buildAsbestosView($errorMessage = null)
    {
        $view = Factory::buildObject('LegionellaView');
        /*$view->setErrorMessage($errorMessage);*/
        $view->createForm();
        $this->html_output = $view->getHtmlOutput();
    }
    private function handleAnswer()
    {
        $model = Factory::buildObject('LegionellaModel');
        $database = Factory::createDatabaseWrapper();
        $model->setDatabaseHandle($database);
        $model->setQuestion1($_POST['question_1']);
        $model->setQuestion2($_POST['question_2']);
        $model->setDate($_POST['expiry']);
        $model->setUserId();
        $model->setTraining_id();


        $exists = $model->checkIfAnswerExists();

        if ($exists >0) {
            $model->modelUpdateAnswer();
        } else {
            $model->modelHandleAnswer();
        }

        $_POST['route'] = "legionella_answer";
        $controller = Factory::buildObject('LegionellaAnswerController');
        $controller->createHtmlOutput();
        $this->html_output = $controller->getHtmlOutput();
    }
}
