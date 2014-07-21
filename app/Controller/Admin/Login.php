<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/11/14
 * Time: 11:26 AM
 */

class Controller_Admin_Login extends Controller_Admin_Abstract {

    public $loggedIn;

    public function indexAction(){

        /* checks to see if the user is already logged in
        * if so then it will verify the Login again
         * if not the sign in page will be rendered
         */
        if(isset($_SESSION['userName']) && isset($_SESSION['password']))
        {
            $loggedIn = App::getModel('admin_user')->verifyLogin($_SESSION['userName'], $_SESSION['password']);
            if(!$loggedIn)
            {
                $this->view = $this->getView();
                $this->render();
            }
            else
            {
                $this->view = new View_Admin_Login_Post();
                $this->render();
            }
        }
        else
        {
            $this->view = $this->getView();
            $this->render();
        }
    }

    public function postAction(){

        $userName = $this->_getParam('userName');
        $password = $this->_getParam('password');
        $userName = mysql_real_escape_string(stripslashes($userName));
        $password = mysql_real_escape_string(stripslashes($password));
        App::getSession()->set('logFail', 'failure to log in');

        $loggedIn = App::getModel('admin_user')->verifyLogin($userName, $password);
        //var_dump($loggedIn);

        if(!$loggedIn){
            //$this->view = new View_Admin_Login_Index();
            //$this->render();

            header('Location: ' . App::getBaseUrl() . 'admin/login/index');
            exit;
        }
        else
        {
            App::getSession()->set('userName', $userName);
            App::getSession()->set('Success', 'Successfully logged in');
        }

        $this->view = $this->getView();
        $this->render();
        return 'You are in the post action of the Front/Login class';
    }

    public function outAction()
    {
        session_destroy();
        header('Location: '.App::getBaseUrl().'/admin/login/index');
        exit;
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