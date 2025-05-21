<?php
class MHController extends ControllerAbstract
{
    public function createHtmlOutput()
    {
        $route = $this->getRoute();
        if ($route == "mh") {
            $this->buildAsbestosView();
            ;

        }
        elseif ($route == "mh_answer") {
            $this->handleAnswer();
        }
    }

    private function getRoute()
    {
        return $_POST['route'] ?? $_GET['route'];
    }

    private function buildAsbestosView($errorMessage = null)
    {
        $view = Factory::buildObject('MHView');
        /*$view->setErrorMessage($errorMessage);*/
        $view->createForm();
        $this->html_output = $view->getHtmlOutput();
    }
    private function handleAnswer()
    {
        $model = Factory::buildObject('MHModel');
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

        $_POST['route'] = "mh_answer";
        $controller = Factory::buildObject('MHAnswerController');
        $controller->createHtmlOutput();
        $this->html_output = $controller->getHtmlOutput();
    }
}
