<?php

class LoginModel
{
    private $database_handle;
    private $email;
    public $password;

    public function __construct()
    {
        $this->database_handle = null;
    }
    public function __destruct(){}
    public function setDatabaseHandle($obj_database_handle)
    {
        $this->database_handle = $obj_database_handle;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function setPassword(string $password){
        $this->password = $password;
    }

    public function login(){
        $sql_query_string = SqlQuery::queryRetrievePassword();
        $sql_query_parameters = [':email' => $this->email];
        $this->database_handle->safeQuery($sql_query_string, $sql_query_parameters);
        $result = $this->database_handle->safeFetchArray();

        if ($result){
            /*so basically the "user_hashed_password" isnt actually hashed so when the password is hashed and it validates it they arnt hashed the same so it turn out false*/
            $storedPasswordHashed = $result["user_hashed_password"];
            if (password_verify($this->password, $storedPasswordHashed)){
                return true;
            }
        }
        else return false;
        $test=$this->password;
        $test2 = $storedPasswordHashed;
        echo $test;
        echo $test2;
        echo 'false';


    }
    public function getAdminStatus($email){
        $sql_query_string = SqlQuery::queryGetAdministratorStatus();
        $sql_query_parameters = [':email' => $email];
        $this->database_handle->safeQuery($sql_query_string, $sql_query_parameters);
        return $this->database_handle->fetchColumn();

    }

}