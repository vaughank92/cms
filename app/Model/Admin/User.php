<?php
/**
 * @package     ${MAGENTO_MODULE_NAMESPACE}\\${MAGENTO_MODULE}
 * @version     
 * @author      Blue Acorn, Inc. <code@blueacorn.com>
 * @copyright   Copyright © 2014 Blue Acorn, Inc.
 */

class Model_Admin_User {

    protected $tableName = 'users';

    public function verifyLogin($userName = false, $password = false){

        $dbConnection = App::getModel('db')->getInstance();

        $query = "SELECT * FROM {$this->tableName} WHERE userName ='$userName'AND password='$password'";
        $results = $dbConnection->query($query);

        //checks the username and password against the database from the specified table

        $queryResults = mysql_query($query);

        //mysql_query will return FALSE on error
        if($queryResults != FALSE)
        {
            //log session information, successful log in
            //looks to see if there is a session, if not starts one
            session_start();
            $_SESSION['userName'] = $userName;
            $_SESSION['password'] = $password;

            $loggedIn = true;
            $_SESSION['loggedIn'] = $loggedIn;

            //store userName for an hour
            //???
            setcookie('userName', $userName, time()+3600);
            setcookie('password', $password, time()+3600);

            return $loggedIn;
        }
        else
        {
            echo "Incorrect name or password";
        }
    }

} 