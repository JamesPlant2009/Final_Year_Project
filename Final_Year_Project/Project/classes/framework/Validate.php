<?php

class Validate
{
    public function __construct()
    {
    }

    public function __destruct()
    {
    }


    /*Change this!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/
    public function validateRoute($route)
    {
        $route_exists = false;
        $routes = [
            'login',
            'login_submit',
            'training_home',
            'home',
            'create',
            'registered',
            'asbestos',
            'matrix',
            'matrix_search',
            'control_answer',
            'control',
            'COSHH',
            'COSHH_answer',
            'dermatitis_answer',
            'dermatitis',
            'electric',
            'electric_answer',
            'enviroment',
            'enviroment_answer',
            'fm_answer',
            'fm',
            'hp_answer',
            'hp',
            'legionella_answer',
            'legionella',
            'mh_answer',
            'mh',
            'asbestos_answer'
        ];

        if (in_array($route, $routes)) {
            $route_exists =  true;
        } else {
            die();
        }
        return $route_exists;
    }

    public function validateString(
        string $datum_name,
        array $tainted,
        int $min_length = null,
        int $max_length = null
    ) {
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

    public function validateEmail(string $email)
    {
        $sanitised_email = filter_var($email, FILTER_SANITIZE_EMAIL);
        return filter_var($sanitised_email, FILTER_VALIDATE_EMAIL) ?: false;
    }


}
