<?php
/**
 * @package     ${MAGENTO_MODULE_NAMESPACE}\\${MAGENTO_MODULE}
 * @version     
 * @author      Blue Acorn, Inc. <code@blueacorn.com>
 * @copyright   Copyright © 2014 Blue Acorn, Inc.
 */

class Model_Admin_User extends Model_Interface{

    protected $tableName = 'users';

    public function verifyLogin($userName = false, $password = false){

        $dbConnection = Model_Db::getInstance();
        //echo "query";
        $query = "SELECT * FROM {$this->tableName} WHERE userName ='$userName' AND password='$password'";
        $results = $dbConnection->query($query);

        //var_dump($results);
        //checks the username and password against the database from the specified table

        //$queryResults = mysqli_query($dbConnection, $query);
        //$numRows = mysqli_num_rows($queryResults);

        $queryResults = $dbConnection->query($query);
        $numRows = $queryResults->fetchColumn();
        //var_dump($numRows);

        //mysql_query will return FALSE on error
        if($numRows != 0)
        {
            $_SESSION['userName'] = $userName;
            $_SESSION['password'] = $password;

            //echo $_SESSION['userName'];

            $loggedIn = true;
            $_SESSION['loggedIn'] = $loggedIn;

            $userId = self::getId($userName);
            $_SESSION['userId'] = $userId;

            //echo $_SESSION['userId'];

            //$_SESSION['userId'] = self::getField('userId',$queryResults);
            //store userName for an hour
            //???
            setcookie('userName', $userName, time()+App::getConfig()->get('cookie_expiration'));
            setcookie('password', $password, time()+App::getConfig()->get('cookie_expiration'));

            return $loggedIn;
        }
        else
        {

            return false;
        }
    }

} 