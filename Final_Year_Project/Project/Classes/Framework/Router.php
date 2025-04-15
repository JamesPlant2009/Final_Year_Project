<?php

namespace Framework;
use Framework\Factory;

/**
 * Router.php
 *
 * Used for redirecting submissions to the correct place.
 * Routes need to be allowed in framework\Validate.php
 *
 * @author Original author: CF Ingrams - cfi@dmu.ac.uk
 * @author Harry Savill - P2724513@dmu.ac.uk
 * @author Rob Singleton - rob.singleton@protonmail.com
 * @package cryptoshow
 */
class Router
{
    private $html_output;

    public function __construct()
    {
        $this->html_output = '';
    }

    public function __destruct()
    {
    }

    public function routing()
    {
        $html_output = '';

        // Set the selected route based on form submission or default
        $selected_route = $this->setRouteName();
        $route_exists = $this->validateRouteName($selected_route);

        // Check if the route exists and dispatch to the appropriate controller
        if ($route_exists == true) {
            $html_output = $this->selectController($selected_route);
        }

        // Process the HTML output
        $this->html_output = $this->processOutput($html_output);
    }

    /**
     * Set the default route to be index
     * Read the name of the selected route from the magic global POST array and overwrite the default if necessary
     *
     * @return mixed|string
     */
    private function setRouteName()
    {
        $selected_route = 'index';

        // Check if the form is submitted and set the route accordingly
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['route'])) {
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

    /**
     * Select the appropriate controller based on the selected route
     */
    public function selectController($selected_route)
    {
        switch ($selected_route) {
            case 'login':
                $controller = Factory::buildObject('LoginController');
                break;
            case 'login-submit':
                $controller = Factory::buildObject('LoginSubmitController');
                break;
            case 'matrix_add':
                $controller = Factory::buildObject('MatrixAddController');
                break;
            case 'matrix_edit':
                $controller = Factory::buildObject('MatrixEditController');
                break;
            case 'Matrix_list':
                $controller = Factory::buildObject('MatrixListController');
                break;
            case 'training_edit':
                $controller = Factory::buildObject('TrainingEditController');
                break;
            case 'training_list':
                $controller = Factory::buildObject('TrainingListController');
                break;
        }

        $controller->createHtmlOutput();

        $html_output = $controller->getHtmlOutput();
        return $html_output;
    }

    /**
     * Process the HTML output
     */
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
