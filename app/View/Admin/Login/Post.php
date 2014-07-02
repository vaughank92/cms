<?php


class View_Admin_Login_Post extends View_Abstract {


    public function __construct(){
        echo " View_Admin_Login_Post";
        var_dump(App::getSession()->get('Success'));


    }
} 