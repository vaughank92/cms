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
        $query = "INSERT INTO contactForm VALUES ('', '$name', '$email', '$comment')";
        $results = self::alterInformation($query);

        $queryTwo = "SELECT * FROM contactForm";
        $display = self::displayInformation($queryTwo);

    }
} 