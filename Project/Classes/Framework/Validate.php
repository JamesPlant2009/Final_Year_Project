<?php

namespace Framework;
/**
 * Validate.php

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
            'login',
            'login-submit',
            'matrix_add',
            'matrix_edit',
            'matrix_list',
            'training_edit',
            'training_list'
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
