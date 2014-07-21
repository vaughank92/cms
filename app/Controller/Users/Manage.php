<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/16/14
 * Time: 9:05 AM
 */


class Controller_Users_Manage extends Controller_Abstract{

    public function __construct()
    {
        //adjust naming
       //$this->model = App::getModel(str_replace('Controller_','', __CLASS__));
    }

    public function addUserAction()
    {
        $this->view = $this->getView();
        $this->render();

        $userName = $this->_getParam('userName');
        //var_dump($userName);
        $email = $this->_getParam('email');
        //var_dump($email);
        $password = $this->_getParam('password');
        //var_dump($password);

        if($userName != '' && $email != '' && $password != '')
        {
            $query = App::getModel('users manage')->addUser($userName, $email, $password);
            //var_dump($query);
            if($query == true)
            {
                App::getModel('admin_user')->verifyLogin($userName, $password);
                header('Location: '.App::getBaseUrl().'admin/login/post');
            }
            return $query;
        }
        else
        {

        }
    }

    public function changePasswordAction()
    {
        App::getSession()->set('changePass', 'failure to log in');
        $this->view = $this->getView();
        $this->render();

        $userName = $this->_getParam('userName');
        $password = $this->_getParam('oldPassword');
        $newPass = $this->_getParam('newPassword');

        //requires loggedin status


        if($userName!= ''&& $password != '' && $newPass != '')
        {
            $query = App::getModel('users manage')->changePassword($userName, $password, $newPass);
            $_SESSION['check'] = true;
            $_SESSION['password'] = $newPass;
            header('refresh: 0');
        }
        else
        {
            //echo "Blank fields";
        }
    }

    public function deleteUserAction()
    {
        //requires password input
        $this->view = $this->getView();
        $this->render();

        $userName = $this->_getParam('userName');
        $password = $this->_getParam('password');

        if($userName != '' && $password !='')
        {
            $userId = App::getModel('users manage')->getId($userName);
            $_SESSION['userId'] = $userId;

            $query = App::getModel('users manage')->deleteUser($userId, $userName, $password);
            //var_dump($query);

            //user did not delete
            if($query == true)
            {
                //echo "Didn't work";
            }
            //user deleted, send to login page
            else
            {
                App::getSession()->set('deleted', 'Successfully deleted');
                header('Location: '.App::getBaseUrl().'admin/login/index');
                //echo "success";
            }
        }
    }
} 