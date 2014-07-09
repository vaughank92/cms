<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 7/8/14
 * Time: 2:56 PM
 */

class Model_Admin_Edit extends Model_Interface{

    public function displayPage($pageId, $userId)
    {
        //pulls the title information
        $query = "SELECT title FROM pages WHERE pageId = '$pageId' AND userId = '$userId'";
        $titleQuery = self::displayInformation($query);
        $title = self::getVal($titleQuery);

        //var_dump($title);

        //pulls the content information
        $queryTwo = "SELECT content FROM pages WHERE pageId = '$pageId' and userId = '$userId'";
        $contentQuery = self::displayInformation($queryTwo);
        $content = self::getVal($contentQuery);

        return array($title, $content);
        //var_dump($content);
    }

    public function updatePage($pageId, $title, $content)
    {
        $query = "UPDATE pages SET title = '$title', content = '$content'
            WHERE pageId = '$pageId'";

        $results = self::alterInformation($query);
        var_dump($results);
        //self::basicPrint($results);
    }

} 