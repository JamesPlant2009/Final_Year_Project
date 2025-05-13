<?php

class CreateModel
{
    private $database_handle;

    private $user_first_name;

    private $user_last_name;

    private $user_role;

    private $user_email;

    private $user_hashed_password;

    public function __construct()
    {
        $this->database_handle = null;
    }
    public function __destruct(){

    }

    public function setDatabaseHandle($database_handle)
    {
        $this->database_handle = $database_handle;
    }

    public function setFirstName(string $user_first_name)
    {
        $this->user_first_name = $user_first_name;

    }
    public function setLastName(string $user_last_name)
    {
        $this->user_last_name = $user_last_name;

    }
    public function setRole(string $user_role)
    {
        $this->user_role = $user_role;

    }
    public function setEmail(string $user_email)
    {
        $this->user_email = $user_email;

    }
    public function setUserHashedPassword(string $user_hashed_password)
    {
        $this->user_hashed_password = $user_hashed_password;

    }
    public function createUser()
    {
        $sql_query_string = SqlQuery::queryCreateUser();
        $sql_query_parameters = [':user_first_name' => $this->user_first_name, ':user_last_name' => $this->user_last_name, ':email' => $this->user_email, ':password' => $this->user_hashed_password, ':role' => $this->user_role];
        $this->database_handle->safeQuery($sql_query_string, $sql_query_parameters);
    }

    public function checkEmailUnique(){
        $sql_query_string = SqlQuery::querySelectEmail();
        $sql_query_parameters = [':user_email' => $this->user_email];
        $this->database_handle->safeQuery($sql_query_string, $sql_query_parameters);

        return $this->database_handle->fetchColumn() === 0;
    }




































}
