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
       $this->model = App::getModel(str_replace('Controller_','', __CLASS__));
    }

    public function addUserAction($userName, $password)
    {
        $query = $this->model->addUser($userName, $password);
        return $query;
    }

    public function changePassAction($userName, $password, $newpass)
    {
        //requires loggedin status
        $query = $this->model->changePass($userName, $password, $newpass);
        return $query;
    }

    public function deleteUserAction($userName, $password)
    {
        //requires password input
        $query = $this->model->deleteUser($userName, $password);
        return $query;
    }



} 