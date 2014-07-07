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
        $query = "INSERT INTO users VALUES (' ', '$userName', '$email', '$password')";
        //$queryTwo = "SELECT * FROM admin";

        $results = self::alterInformation($query);
        //$display = self::displayInformation($queryTwo);
    }

    public function deleteUser($userName, $password)
    {
        $query = "DELETE FROM users WHERE userName = '$userName'
         AND password = '$password'";
        //$queryTwo = "SELECT * FROM admin";

        $results = self::alterInformation($query);
        var_dump($results);
        //$display = self::displayInformation($queryTwo);
    }

    public function changePassword($userName, $password, $newpass)
    {
        $query = "UPDATE users SET password = '$newpass'
            WHERE userName = '$userName' AND password = '$password'";

        //$queryTwo= "SELECT * FROM admin";

        $results = self::alterInformation($query);

        //$display = self::displayInformation($queryTwo);
    }

    public function display($field)
    {
        $query = "SELECT $field FROM pages";
        $results = self::displayInformation($query);
        self::basicPrint($results);

    }

} 