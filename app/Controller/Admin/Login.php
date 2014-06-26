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
        $this->model = App::getModel(str_replace('Controller_','', __CLASS__));

        //$this->model = App::getModel('Admin_User')->verifyLogin();
    }

    public function indexAction(){

        die('HERE controller_admin_login');

       // $this->view = self::postAction();

    }

    public function postAction(){

        $this->view = $this->getView();

        $pageId = $this->_getParam('id');
        if($pageId){
            echo $this->view;
        } else {
            //404
            echo "no id";
        }

        $userName = $this->_getParam('userName');
        $password = $this->_getParam('password');

        //checking that I have access to these
        //echo $_POST['userName'];
        //echo $_POST['password'];

        //remove quotes on strings and prepend backslash to make data safe
        $userName = mysql_real_escape_string(stripslashes($userName));
        $password = mysql_real_escape_string(stripslashes($password));

        $loggedIn = App::getModel('admin_user')->verifyLogin($userName, $password);


        return 'You are in the post action of the Front/Login class';
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