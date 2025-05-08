<?php
class AsbestosController extends ControllerAbstract
{
    public function createHtmlOutput()
    {
        $route = $this->getRoute();
        if ($route == "asbestos") {
            $this->buildAsbestosView();
            ;

        }
        elseif ($route == "asbestos_answer") {
            $this->handleAnswer();
        }
    }

    private function getRoute()
    {
        return $_POST['route'] ?? $_GET['route'];
    }

    private function buildAsbestosView($errorMessage = null)
    {
        $view = Factory::buildObject('AsbestosView');
        /*$view->setErrorMessage($errorMessage);*/
        $view->createForm();
        $this->html_output = $view->getHtmlOutput();
    }
    private function handleAnswer()
    {
    $model = Factory::buildObject('AsbestosModel');
    $database = Factory::createDatabaseWrapper();
    $model->setDatabaseHandle($database);
    $model->setQuestion1($_POST['question_1']);
    $model->setQuestion2($_POST['question_2']);
    $model->setDate($_POST['expiry']);
    $model->setUserId();
    $model->setTraining_id(1);

    $model->modelHandleAnswer();


    $_POST['route'] = "asbestos_answer";
    $controller = Factory::buildObject('AsbestosAnswerController');
    $controller->createHtmlOutput();
    $this->html_output = $controller->getHtmlOutput();

    }
}
