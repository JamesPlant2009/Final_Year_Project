<?php

class MatrixModel
{
    public $user_id;

    private $date;

    private $training_id;

    private $database_handle;

    private $user_first_name;

    private $user_last_name;

    private $user_role;

    private $results = [];

    public function setDatabaseHandle($database_handle)
    {
        $this->database_handle = $database_handle;
    }


    public function setUserID($user_id)
    {
        $this->user_id = $user_id;

    }


    public function getDatesAndCoursesFromID()
    {
        $sql_query_string_dates = SqlQuery::queryGetDatesFromID();
        $sql_query_string_courses = SqlQuery::queryGetCourseFromID();

        $all_results = [];

        for ($x = 1; $x <= 21; $x++) {
            // Get Date for training_id
            $sql_query_parameters_dates = [
                ':user_id' => $this->user_id,
                ':training_id' => $x
            ];
            $this->database_handle->safeQuery($sql_query_string_dates, $sql_query_parameters_dates);
            $result_date = $this->database_handle->safeFetchArray();

            // Get Course for training_id
            $sql_query_parameters_course = [
                ':training_id' => $x
            ];
            $this->database_handle->safeQuery($sql_query_string_courses, $sql_query_parameters_course);
            $result_course = $this->database_handle->safeFetchArray();

            // Combine results if at least date exists
            if ($result_date && isset($result_date['date'])) {
                $entry = [
                    'training_id' => $x,
                    'date' => $result_date['date'],
                    'course' => $result_course['course']
                ];

                $all_results[] = $entry;
            }
        }

        $this->results = $all_results;
    }

    public function getResults()
    {
        return $this->results;

    }
}