<?php

class MatrixModel
{
    private $user_id;

    private $date;

    private $training_id;

    private $database_handle;

    private $user_first_name;

    private $user_last_name;

    private $user_role;

    public function setDatabaseHandle($database_handle)
    {
        $this->database_handle = $database_handle;
    }




    //need to go through the database and select all the dates when the user_id = 1 for example then increment and do it again.
    public function setUserId(){

        $this->user_id = 1;

    }

    //need to go through the database and select all the dates when the training_id = 1 for example then increment and do it again.
    public function setTraining_id()
    {
        $this->training_id = 1;

    }

    //finds all the instances of a date when the user_id= 1 for example and training_id = 1. Will then need to repeat for user_id = 1 and training_id = 2.
    public function getDate()
    {
        $sql_query_string = SqlQuery::queryGetDateByUserAndTraining();
        $sql_query_parameters = [':training_id' => $this->training_id, ':user_id' => $this->user_id,];
        $this->database_handle->safeQuery($sql_query_string, $sql_query_parameters);

    }

    public function getUserDetails()
    {
        $sql_query_string = SqlQuery::queryGetUserDetails();
    }

    public function getInfo()
    {
        $this->getDate();
        $this->getUserDetails();
    }









}