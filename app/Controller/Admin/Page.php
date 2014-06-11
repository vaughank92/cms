<?php

class Controller_Admin_Page extends Controller_Abstract{

    protected function __construct(){
        //Check that user is logged in...

        //session_start() starts or resumes a session
        //needed at the top of every page that requires logged in
        session_start();
        //include the log in page to be able to match to database

        //if the loggedIn variable is set and if it is true, pulled from login page
        if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true)
        {
            //temporary check, will allow access
            echo "Logged in";
        }
        else
        {
            echo "Not Logged In";
        }
    }

    public function viewAction(){

        $currentView = new View_Front_Page_View();
        //$userName, $pageId


        return 'You are in the view action of the front/page class';

    }

} 