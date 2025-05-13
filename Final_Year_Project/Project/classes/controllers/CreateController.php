<?php
class CreateController extends ControllerAbstract
{

    private $validate;
    public function createHtmlOutput()
    {
        $route = $this->getRoute();

        if ($route == "create") {
            $this->buildCreateView();
        } elseif ($route == "registered") {
            $this->validate = new Validate();
            $error = $this->validateEmail();

            if ($error) {
                $this->buildCreateView($error);
            } else {

                $this->createUser();
            }
        }

    }

    private function getRoute()
    {
        return $_POST["route"] ?? 'create';
    }

    private function buildCreateView()
    {
        $view = Factory::buildObject('CreateView');
        $view->createForm();
        $this->html_output = $view->getHtmlOutput();
    }

    private function checkEmailUnique(){
        $model = Factory::buildObject('CreateModel');
        $database = Factory::createDatabaseWrapper();
        $model->setEmail($_POST['user_email']);
        $model->setDatabaseHandle($database);

        return $model->checkEmailUnique();
    }

    private function validateEmail()
    {


        if (!$this->validate->validateEmail($_POST['user_email'])) {
            return 'Invalid email address.';
        }

        if (!$this->checkEmailUnique()) {
            return 'Email already in use! Please login.';
        }
        return null;
    }




    private function createUser()
    {
        $model = Factory::buildObject('CreateModel');
        $password = Factory::buildObject('Password');
        $database = Factory::createDatabaseWrapper();
        $model->setFirstName($_POST['user_first_name']);
        $model->setLastName($_POST['user_last_name']);
        $model->setRole($_POST['user_role']);
        $model->setEmail($_POST['user_email']);
        $model->setUserHashedPassword($password->hashPassword($_POST['user_password']));
        $model->setDatabaseHandle($database);
        $model->createUser();

        $_POST['route'] = 'login';
        $controller = Factory::buildObject('LoginController');
        $controller->createHtmlOutput();
        $this->html_output= $controller->getHtmlOutput();

    }




}
