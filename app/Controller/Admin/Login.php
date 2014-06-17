<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/11/14
 * Time: 11:26 AM
 */

class Controller_Admin_Login extends Controller_Abstract {

    public $loggedIn = False;

    public function indexAction(){
        die('HERE');
    }

    public function postAction(){
        //Check username and password
        //Set sessions vars to persist
        //Set cookie

        //grab the username and password
        //Needed?*
        $userName = $this->_getParam('username');
        $password = $this->_getParam('password');


        //remove quotes on strings and prepend backslash to make data safe
        $userName = mysql_real_escape_string(stripslashes($userName));
        $password = mysql_real_escape_string(stripslashes($password));

        $loggedIn = App::getModel('admin_user')->verifyLogin($userName, $password);
    }

        public function logSuccess()
        {
            /*sends loggedIn to the model
            * which if TRUE it will update
             * that the login was a success
             */
            $this->model->success = self::postAction();
        }
} 