<?php

class Controller_Admin_Page extends Controller_Abstract{

    public $model;
    protected  function __construct(){
    }

    public function adminDeletePageAction()
    {

    }

    public function adminDeleteUserAction()
    {

    }

    public function adminChangePasswordAction()
    {

    }


    public function viewAction(){
        echo "view action";
        $currentView = new View_Front_Page_View();
        //$userName, $pageId
        return 'You are in the view action of the Front/Page class';
    }


} 