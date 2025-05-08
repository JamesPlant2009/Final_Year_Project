<?php

class Router
{
    private $html_output;

    public function __construct()
    {
        $this->html_output = '';
    }

    public function __destruct(){}

    public function routing()
    {
        $html_output = '';

        $selected_route = $this->setRouteName();
        $route_exists = $this->validateRouteName($selected_route);

        if ($route_exists == true)
        {
            $html_output = $this->selectController($selected_route);
        }
        $this->html_output = $this->processOutput($html_output);
    }

    /**
     * Set the default route to be index
     *
     * Read the name of the selected route from the magic global POST array and overwrite the default if necessary
     *
     * @return mixed|string
     */
    private function setRouteName()
    {
        $selected_route = 'login';
        if (isset($_POST['route']))
        {
            $selected_route = $_POST['route'];
        }
        return $selected_route;
    }

    /**
     * Check to see that the route name passed from the client is valid.
     * If not valid, chances are that a user is attempting something malicious.
     * In which case, kill the app's execution.
     */
    private function validateRouteName($selected_route)
    {
        $route_exists = false;
        $validate = Factory::buildObject('Validate');
        $route_exists = $validate->validateRoute($selected_route);
        return $route_exists;
    }


    //change this//
    public function selectController($selected_route)
    {
        switch ($selected_route)
        {
            case 'home':
                $controller = Factory::buildObject('HomeController');
                break;
            case 'training_home':
                $controller = Factory::buildObject('TrainingHomeController');
                break;
            case 'registered':
            case 'create':
                $controller = Factory::buildObject('CreateController');
                break;
            case 'asbestos_answer':
            case 'asbestos':
                $controller = Factory::buildObject('AsbestosController');
                break;
            case 'matrix':
                $controller = Factory::buildObject('MatrixController');
                break;
            case 'login_submit':
            case 'login':
            default:
                $controller = Factory::buildObject('LoginController');
                break;
        }
        $controller->createHtmlOutput();
        $html_output = $controller->getHtmlOutput();
        return $html_output;
    }

    private function processOutput(string $html_output)
    {
        $processed_html_output = '';
        $process_output = Factory::buildObject('ProcessOutput');
        $processed_html_output = $process_output->assembleOutput($html_output);
        return $processed_html_output;
    }

    public function getHtmlOutput()
    {
        return $this->html_output;
    }
}
