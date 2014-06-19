<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/12/14
 * Time: 9:25 AM
 */

class Controller_Admin_Abstract extends Controller_Abstract {

    //Constructor checks for being logged in every time a new Page is pulled

    function __construct()
    {
        if(!$this->_isLoggedIn()){
            throw new Exception('You are not logged in!');
        }
    }

    protected function _isLoggedIn(){
        return (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true);
    }
}