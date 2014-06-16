<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/12/14
 * Time: 9:25 AM
 */

class Controller_Admin_Abstract {

    //Constructor checks for being logged in every time a new Page is pulled

    function __construct()
    {
        //temporary values for if/else
        if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true)
        {
            echo "logged in";
            return true;
        }
        else
        {
            return false;
            echo "Nope not logged in";
        }
    }

} 