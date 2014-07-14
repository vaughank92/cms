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
        //log session information, successful log in
        //looks to see if there is a session, if not starts one
        session_start();

        if(!$this->_isLoggedIn()){
            //throw new Exception('You are not logged in!');
            //echo "You are not logged in!";
        }
        else
        {
            //echo "You are logged in";
            //App::getModel('admin user')->verifyLogin($_SESSION['userName'], $_SESSION['password']);
            //header('Location: '.App::getBaseUrl().'admin/login/post');
        }
    }

    protected function _isLoggedIn(){
        return (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true);
    }
}