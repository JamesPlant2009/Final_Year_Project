<?php
class ControlController extends ControllerAbstract
{
    public function createHtmlOutput()
    {
        $route = $this->getRoute();
        if ($route == "control") {
            $this->buildControlView();
            ;

        }
        elseif ($route == "control_answer") {
            $this->handleAnswer();
        }
    }

    private function getRoute()
    {
        return $_POST['route'] ?? $_GET['route'];
    }

    private function buildControlView($errorMessage = null)
    {
        $view = Factory::buildObject('ControlView');
        /*$view->setErrorMessage($errorMessage);*/
        $view->createForm();
        $this->html_output = $view->getHtmlOutput();
    }
    private function handleAnswer()
    {
        $model = Factory::buildObject('ControlModel');
        $database = Factory::createDatabaseWrapper();
        $model->setDatabaseHandle($database);
        $model->setQuestion1($_POST['question_1']);
        $model->setQuestion2($_POST['question_2']);
        $model->setDate($_POST['expiry']);
        $model->setUserId();
        $model->setTraining_id();

        // Check if entry exists
        $exists = $model->checkIfAnswerExists(); //

        if ($exists >0) {
            $model->modelUpdateAnswer();
        } else {
            $model->modelHandleAnswer();
        }

        $_POST['route'] = "control_answer";
        $controller = Factory::buildObject('ControlAnswerController');
        $controller->createHtmlOutput();
        $this->html_output = $controller->getHtmlOutput();
    }
}
