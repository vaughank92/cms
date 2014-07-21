<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 7/9/14
 * Time: 4:17 PM
 */


class Model_Page extends Model_Interface{

    public function displayPage($pageId)
    {
        $query = "SELECT * FROM pages WHERE pageId = '$pageId'";
        return self::displayInformation($query);
    }

    public function updatePage($pageId, $title, $content)
    {
        $query = "UPDATE pages SET title = '$title', content = '$content' WHERE pageId = '$pageId'";
        $results = self::alterInformation($query);
        var_dump($results);
    }

    public function allPages()
    {
        $query = "SELECT * FROM pages";
        return self::displayInformation($query);
    }

    public function deletePage($pageId)
    {
        $query = "DELETE FROM pages WHERE pageId = '$pageId'";
        $results = self::alterInformation($query);
    }

   /*public function displayPage($pageId)
   * {
    * $query = "SELECT * FROM pages WHERE pageId = '$pageId'";
    * $results = self::displayInformation($query);
    * return results;
    * }
    */

    public function displayUserPages($userId)
    {
        $query = "SELECT * FROM pages WHERE userId = '$userId'";
        $results = self::displayInformation($query);
        return $results;
    }

    public function addPage($userId, $userName, $title, $content)
    {
        $query = "INSERT INTO pages VALUES (' ', '$userId', '$userName', NULL, '', '$title', '$content')";
        $results = self::alterInformation($query);
    }
} 