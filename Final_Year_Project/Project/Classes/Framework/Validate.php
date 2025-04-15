<?php

namespace Framework;
/**
 * Validate.php
 *
 * @author Original author: CF Ingrams - cfi@dmu.ac.uk
 * @author Rob Singleton - rob.singleton@protonmail.com
 * @author Harry Savill - P2724513@dmu.ac.uk
 * @author Jakub Pietrzak - P2713508@my365.dmu.ac.uk
 * @author Harvey Shaw - ?@email.com
 * @author James Plant - ?@email.com
 * @copyright De Montfort University
 *
 * @package cryptoshow
 */
class Validate
{
    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    /**
     * Check that the route name from the browser is a valid route
     * If it is not, abandon the processing.
     * NB this is not a good way to achieve this error handling.
     *
     * @param $route
     * @return boolean
     */
    public function validateRoute($route)
    {
        $route_exists = false;
        $routes = [
            'index',
            'view_events',
            'create_event',
            'create_event_submit',
            'manage_events',
            'manage_members',
            'member_profile',
            'event_signup',
            'form-submit-eventsignup-submit',
            'register',
            'register-submit',
            'login',
            'login-submit',
            'device_list_view',
            'Submit_add_device',
            'Submit_remove_device',
            'submit_change_name',
            'delete_event',
            'logout',
            'edit-profile',
            'edit-profile-submit',
            'view-members-list'
        ];

        if (in_array($route, $routes)) {
            $route_exists = true;
        } else {
            die();
        }
        return $route_exists;
    }

    public function validateString(
        string $datum_name,
        array  $tainted,
        int    $min_length = null,
        int    $max_length = null
    )
    {
        $validated_string = false;
        if (!empty($tainted[$datum_name])) {
            $string_to_check = $tainted[$datum_name];
            $sanitised_string = filter_var(
                $string_to_check,
                FILTER_SANITIZE_SPECIAL_CHARS,
                FILTER_FLAG_NO_ENCODE_QUOTES
            );
            $sanitised_string_length = strlen($sanitised_string);
            if ($min_length <= $sanitised_string_length && $sanitised_string_length <= $max_length) {
                $validated_string = $sanitised_string;
            }
        }
        return $validated_string;
    }
}
