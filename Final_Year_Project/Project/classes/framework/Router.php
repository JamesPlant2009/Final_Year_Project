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


    private function setRouteName()
    {
        $selected_route = 'login';
        if (isset($_POST['route']))
        {
            $selected_route = $_POST['route'];
        }
        return $selected_route;
    }

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
            case 'electric_answer':
            case 'electric':
                $controller = Factory::buildObject('ElectricController');
                break;
            case 'enviroment_answer':
            case 'enviroment':
                $controller = Factory::buildObject('EnviromentController');
                break;
            case 'fm_answer':
            case 'fm':
                $controller = Factory::buildObject('FMController');
                break;

            case 'mh_answer':
            case 'mh':
                $controller = Factory::buildObject('MHController');
                break;
            case 'legionella_answer':
            case 'legionella':
                $controller = Factory::buildObject('LegionellaController');
                break;
            case 'hp_answer':
            case 'hp':
                $controller = Factory::buildObject('HPController');
                break;
            case 'control_answer':
            case 'control':
                $controller = Factory::buildObject('ControlController');
                break;
            case 'COSHH_answer':
            case 'COSHH':
                $controller = Factory::buildObject('COSHHController');
                break;
            case 'dermatitis_answer':
            case 'dermatitis':
                $controller = Factory::buildObject('DermatitisController');
                break;
            case 'matrix':
            case 'matrix_search':
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
