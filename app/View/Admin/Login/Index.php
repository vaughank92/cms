<?php


class View_Admin_Login_Index extends View_Abstract {


    public function __construct(){
        echo " View_Admin_Login_Index";
        var_dump(App::getSession()->get('Error'));

    }
} 