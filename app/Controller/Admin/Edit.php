<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/13/14
 * Time: 2:52 PM
 */

class Controller_Admin_Edit extends Controller_Admin_Abstract{

    //cancel button
    public function cancelAction()
    {
        $this->model->cancel();
    }

    //save button
    public function saveAction()
    {
        $this->model->save();
    }




}
