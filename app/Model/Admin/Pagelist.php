<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/17/14
 * Time: 2:53 PM
 */

class Model_Admin_Pagelist extends Model_Interface{

    //requires logged in status

    //list all pages
    //delete page
    //edit page
    //display page
    //add page


    //will display all pages from the table
    //admin use only


    public function allPages()
    {
        $query = "SELECT * FROM pages";
        $results = self::displayInformation($query);
    }

    //delete page: admin and user only
    public function deletePage($pageId)
    {
        $query = "DELETE FROM pages WHERE pageId = '$pageId'";
        //$queryTwo = "SELECT * FROM pages";

        $results = self::alterInformation($query);
        //$display = self::displayInformation($queryTwo);
    }

    //admin and user only
    public function editPage()
    {

    }

    //display based on pageId
    //all use
    public function displayPage($pageId)
    {
        $query = "SELECT * FROM pages WHERE pageId = '$pageId'";
        $results = self::displayInformation($query);

        return $results;
    }

    //is not caps sensitive userAdmin == useradmin
    //display the pages based on userName
    //allow for user to display own pages and for search
    public function displayUserPages($userId)
    {
        //echo $userId;

        $query = "SELECT * FROM pages WHERE userId = '$userId'";
        $result = self::displayInformation($query);
        //var_dump($result);
        return $result;
    }

    //allow user to add pageIN
    public function addPage($userId, $title, $content)
    {
        $query = "INSERT INTO pages VALUES
            (' ', '$userId', '$title', '$content')";
        //$queryTwo = "SELECT * FROM pages";

        $results = self:: alterInformation($query);
        //$display = self::displayInformation($queryTwo);
    }
} 