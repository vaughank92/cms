<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/11/14
 * Time: 11:26 AM
 */

class Controller_Admin_Login extends Controller_Abstract {

    public $loggedIn = False;
    public $model;

    public function __construct()
    {

    }

    public function indexAction(){

        $this->view = $this->getView();
        $this->render();
    }

    public function postAction(){

        $userName = $this->_getParam('userName');
        $password = $this->_getParam('password');
        $userName = mysql_real_escape_string(stripslashes($userName));
        $password = mysql_real_escape_string(stripslashes($password));

        $loggedIn = App::getModel('admin_user')->verifyLogin($userName, $password);
        //var_dump($loggedIn);

        if(!$loggedIn){

            App::getSession()->set('Failed', 'Incorrect username and/or password');
            //$this->view = new View_Admin_Login_Index();
            //$this->render();
            header('Location: ' . App::getBaseUrl() . 'admin/login/index');
            exit;

        }
        else
        {
            //echo $userId;
            App::getSession()->set('userName', $userName);
            App::getSession()->set('Success', 'Successfully logged in');
        }

        $this->view = $this->getView();
        $this->render();
        return 'You are in the post action of the Front/Login class';
        //return $userId;
    }

        public function successAction()
        {
            /*sends loggedIn to the model
            * which if TRUE it will update
             * that the login was a success
             */
            $this->model->success = self::postAction();
        }
} 