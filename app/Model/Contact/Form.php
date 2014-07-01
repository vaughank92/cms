<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/23/14
 * Time: 2:31 PM
 */


class Model_Contact_Form extends Model_Interface{

    //log data from the form to the database
    public function submit($name, $email, $comment)
    {
        $query = "INSERT INTO contact VALUES ('', '$name', '$email', '$comment')";
        $results = self::alterInformation($query);

        $queryTwo = "SELECT * FROM contact";
        $display = self::displayInformation($queryTwo);

    }
} 