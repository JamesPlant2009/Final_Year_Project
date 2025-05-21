<?php
class FMController extends ControllerAbstract
{
    public function createHtmlOutput()
    {
        $route = $this->getRoute();
        if ($route == "fm") {
            $this->buildAsbestosView();
            ;

        }
        elseif ($route == "fm_answer") {
            $this->handleAnswer();
        }
    }

    private function getRoute()
    {
        return $_POST['route'] ?? $_GET['route'];
    }

    private function buildAsbestosView($errorMessage = null)
    {
        $view = Factory::buildObject('FMView');
        /*$view->setErrorMessage($errorMessage);*/
        $view->createForm();
        $this->html_output = $view->getHtmlOutput();
    }
    private function handleAnswer()
    {
        $model = Factory::buildObject('FMModel');
        $database = Factory::createDatabaseWrapper();
        $model->setDatabaseHandle($database);
        $model->setQuestion1($_POST['question_1']);
        $model->setQuestion2($_POST['question_2']);
        $model->setDate($_POST['expiry']);
        $model->setUserId();
        $model->setTraining_id();

        // Check if entry exists
        $exists = $model->checkIfAnswerExists(); // <-- You need this method in AsbestosModel

        if ($exists >0) {
            $model->modelUpdateAnswer();
        } else {
            $model->modelHandleAnswer();  // <-- You should have this method for inserting new entries
        }

        $_POST['route'] = "fm_answer";
        $controller = Factory::buildObject('FMAnswerController');
        $controller->createHtmlOutput();
        $this->html_output = $controller->getHtmlOutput();
    }
}
