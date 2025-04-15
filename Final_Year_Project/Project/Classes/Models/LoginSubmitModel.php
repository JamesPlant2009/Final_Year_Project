<?php
/** LoginSubmitModel.php
 * Model portion of the login completion segment.
 * Handles accessing the hashed password, checking the account's existence,
 * and checking a user's admin status.
 * Rob Singleton - rob.singleton@protonmail.com
 * James Plant - JamesPlant2009@gmail.com
 * @package cryptoshow
 */


class LoginSubmitModel
{

    private $database_handle; // if type defined, cannot be set to NULL.
    private $name;
    private $pwd;
    private $hash_pwd;
    private $validate_error_flag;

    public function __construct()
    {
        $this->database_handle = null;
        $this->name = null;
        $this->pwd = null;
        $this->hash_pwd = null;
        $this->validate_error_flag = false;
    }

    public function setDatabaseHandle($provided_db_handle)
    {
        $this->database_handle = $provided_db_handle;
    }

    public function setValues($sanitised_inputs)
    {
        $this->name = $sanitised_inputs['sanitised_username'];
        $this->pwd = $_POST['pwd'];
    }

    public function getStoredPassword() : array
    {
        $sql_query_string = SqlQuery::queryRetrievePassword();
        $sql_query_parameters = array(':user' => $this->name);
        $query_result = $this->database_handle->safeQuery($sql_query_string, $sql_query_parameters);
        return $this->database_handle->safeFetchArray();
    }

    public function checkAccountExists() : bool
    {
        $sql_query_string = SqlQuery::queryGetMemberDetails();
        $sql_query_parameters = array(':user' => $this->name);
        $query_result = $this->database_handle->safeQuery($sql_query_string, $sql_query_parameters);
        $account_count = $this->database_handle->countRows();
        if ($account_count == 0) {return false; } else { return true;}
    }

    public function getAdminStatus() : bool
    {
        $sql_query_string = SqlQuery::queryGetAdministratorStatus();
        $sql_query_parameters = array(':user' => $this->name);
        $query_result = $this->database_handle->safeQuery($sql_query_string, $sql_query_parameters);
        $result = $this->database_handle->safeFetchArray();
        if ($result['user_admin'] == 1) {return true;} else {return false;}
    }

}
