<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/16/14
 * Time: 9:05 AM
 */


class Controller_Users_Manage extends Controller_Abstract{

    public function __construct($model)
    {
        //adjust naming
        $this->model = $model->newModel(new Model_Users_Manage());
    }

    public function newUserAction()
    {

    }

    public function changePassAction()
    {

    }

    public function deleteUserAction()
    {
        //requires password input
    }



} 