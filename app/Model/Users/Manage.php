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
        $check = "SELECT * FROM users WHERE userName = '$userName'";
        $checkResults = self::checkinformation($check);

        //check if the username is duplicated
        if($checkResults == 0)
        {
            $query = "INSERT INTO users VALUES (' ', '$userName', '$email', '$password')";
            $results = self::alterInformation($query);

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
        $query = "DELETE FROM users WHERE userId = '$userId' AND userName = '$userName'
         AND password = '$password'";

        $results = self::alterInformation($query);

        //check that the user is deleted
        $check = "SELECT * FROM users WHERE userName = '$userName'";
        $checkResults = self::checkInformation($check);

        var_dump($checkResults);

        return $checkResults;
    }

    public function changePassword($userName, $password, $newpass)
    {

        $query = "UPDATE users SET password = '$newpass'
            WHERE userName = '$userName' AND password = '$password'";

        $results = self::alterInformation($query);

        $_SESSION['password'] = $newpass;
        echo $_SESSION['password'];
        return $newpass;
    }

    public function display($field)
    {
        $query = "SELECT $field FROM pages";
        $results = self::displayInformation($query);
        self::basicPrint($results);
    }

} 