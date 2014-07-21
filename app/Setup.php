<?php

final class Setup{
	
	public function setup(){
        //setup schema of database...create tables/columns. Maybe prepopulate with sample data for example admin username/password
        //Set is_installed flag in config.xml to be 1

        $dbConnection = Model_Db::getInstance();

        $usersTable = "CREATE TABLE IF NOT EXISTS users
            (userId INT NOT NULL AUTO_INCREMENT,
            PRIMARY KEY (userId),
            userName VARCHAR (20) UNIQUE NOT NULL,
            email VARCHAR(32) NOT NULL,
            password VARCHAR (16) NOT NULL)";

        $usersQuery = $dbConnection->exec($usersTable);

        $pagesTable = "CREATE TABLE IF NOT EXISTS pages (
            pageId INT AUTO_INCREMENT PRIMARY KEY,
            userId INT NOT NULL,
            userName VARCHAR (20) NOT NULL,
            created TIMESTAMP NOT NULL DEFAULT 0,
            modified TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            title VARCHAR (32) NOT NULL,
            content TEXT)";

        $pagesQuery = $dbConnection->exec($pagesTable);

        $contactForm = "CREATE TABLE IF NOT EXISTS contact (
            formId INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR (32) NOT NULL,
            email VARCHAR (32) NOT NULL,
            comment TEXT NOT NULL )";

        $contactQuery = $dbConnection->exec($contactForm);

        $content = App::getConfig();
        // var_dump($content);
        $installed = $content->installed();
        //var_dump($content);

        /*if(!$usersQuery || !$pagesQuery || !$contactQuery)
        {
            echo mysqli_error($dbConnection);
            die (" could not create tables ");
        }
        else
        {
            $content = App::getConfig();
            $installed = $content->installed();
            var_dump($content);
        }*/

        //example data
        $name = "Admin Info";
        $userName = "Admin";
        $password = "123abc";
        $email = "admin@example.com";
        $comment = "comment on the comment form";
        $title = "Title for a New Page";
        $content = "content in the new page!";
        $userId = 1;

        $popContact = "INSERT INTO contact VALUES ('', '$name', '$email', '$comment') ON DUPLICATE KEY UPDATE name = '$name'";
        $cquery = $dbConnection->query($popContact);
        //echo $cquery;

        $popUsers = "INSERT INTO users VALUES ('', '$userName','$email', '$password') ON DUPLICATE KEY UPDATE userName = '$userName'";
        $uquery = $dbConnection->query($popUsers);
        // echo $uquery;

        $popPages = "INSERT INTO pages VALUES ('','$userId', '$userName',NULL, '','$title', '$content') ON DUPLICATE KEY UPDATE userId = '$userId'";
        $pquery = $dbConnection->query($popPages);
        //echo $pquery;

        /*$i = 0;
        while($i<3)
        {
            $name = "person".$i;
            $userName = "person".$i;
            $password = "person".$i."pass";
            $email = "person".$i."@example.com";
            $comment = "comment ".$i;
            $title = "title".$i;
            $content = "texty".$i;
            $userId = $i;

            $popContact = "INSERT INTO contact VALUES ('', '$name', '$email', '$comment')";
            $cquery = $dbConnection->query($popContact);
            //echo $cquery;

            $popUsers = "INSERT INTO users VALUES ('', '$userName', '$password')";
            $uquery = $dbConnection->query($popUsers);
           // echo $uquery;

            $popPages = "INSERT INTO pages VALUES ('','$userId', '$title', '$content')";
            $pquery = $dbConnection->query($popPages);
            echo $pquery;

            $i++;
        }*/


	}
}
