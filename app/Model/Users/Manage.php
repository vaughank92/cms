<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/24/14
 * Time: 10:31 AM
 */


class Model_Users_Manage extends Model_Interface{

    public function addUser($userName, $email, $password)
    {
        //adds a new user
        //need to set username to be unique in db
        //returns valid and the overall query for testing purposes
        $check = "SELECT * FROM users WHERE userName = :userName";
        $variables = array(':userName' => $userName);

        $checkResults = self::checkinformation($check, $variables);

        //check if the username is duplicated
        if($checkResults == 0)
        {
            $query = "INSERT INTO users VALUES (' ', :userName, :email, :password)";
            $variables = array(':userName' => $userName, ':email' => $email, ':password' => $password);

            $results = self::alterInformation($query, $variables);

            $_SESSION['userName'] = $userName;
            $_SESSION['password'] = $password;
            return true;
        }
        else
        {
            return false;;
        }
    }

    public function deleteUser($userId, $userName, $password)
    {
        $query = "DELETE FROM users WHERE userId = :userId AND userName = :userName
         AND password = :password";

        $variables = array(':userId' => $userId, ':userName' => $userName, ':password' => $password);
        $results = self::alterInformation($query, $variables);

        //check that the user is deleted
        $check = "SELECT * FROM users WHERE userName = :userName";
        $variables = array(':userName' => $userName);
        $checkResults = self::checkInformation($check, $variables);

        //var_dump($checkResults);

        return $checkResults;
    }

    public function changePassword($userName, $password, $newpass)
    {

        $query = "UPDATE users SET password = :newpass
            WHERE userName = :userName = AND password = :password";

        $variables = array(':newpass' => $newpass, ':userName' => $userName, ':password' => $password);
        $results = self::alterInformation($query, $variables);

        $_SESSION['password'] = $newpass;
        echo $_SESSION['password'];
        return $newpass;
    }

    public function display($field)
    {
        $query = "SELECT :field FROM pages";
        $variables = array(':field' => $field);

        $results = self::displayInformation($query, $variables);
        self::basicPrint($results);
    }

} 