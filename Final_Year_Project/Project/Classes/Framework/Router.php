<?php

namespace Framework;
use Factory;

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
            case 'view_events':
                $controller = Factory::buildObject('ViewEventsController');
                break;
            case 'create_event_submit':
                $controller = Factory::buildObject('EventCreatedController');
                break;
            case 'create_event':
                $controller = Factory::buildObject('CreateEventController');
                break;
            case 'manage_events':
                $controller = Factory::buildObject('ManageEventsController');
                break;
            case 'delete_event':
                $controller = Factory::buildObject('EventDeletedController');
                break;
            case 'manage_members':
                $controller = Factory::buildObject('ManageMembersController');
                break;
            case 'member_profile':
                $controller = Factory::buildObject('MemberProfileController');
                break;
            case 'event_signup':
                $controller = Factory::buildObject('EventSignupController');
                break;
            case 'form-submit-eventsignup-submit':
                $controller = Factory::buildObject('EventSignupCompleteController');
                break;
            case 'register':
                $controller = Factory::buildObject('RegisterController');
                break;
            case 'register-submit':
                $controller = Factory::buildObject('RegisterSubmitController');
                break;
            case 'login':
                $controller = Factory::buildObject('LoginController');
                break;
            case 'login-submit':
                $controller = Factory::buildObject('LoginSubmitController');
                break;
            case 'device_list_view':
                $controller = Factory::buildObject('DeviceListViewController');
                break;
            case 'Submit_add_device':
                $controller = Factory::buildObject('DeviceAddedController');
                break;
            case 'Submit_remove_device':
                $controller = Factory::buildObject('DeviceRemoveController');
                break;
            case 'logout':
                $controller = Factory::buildObject('LogoutController');
                break;
            case 'submit_change_name':
                $controller = Factory::buildObject('DeviceEditController');
                break;
            case 'edit-profile':
                $controller = Factory::buildObject('EditProfileController');
                break;
            case 'edit-profile-submit':
                $controller = Factory::buildObject('EditProfileSubmitController');
                break;
            case 'view-members-list':
                $controller = Factory::buildObject('ViewMembersListController');
                break;
            case 'index':
            default:
                $controller = Factory::buildObject('ViewEventsController');
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
