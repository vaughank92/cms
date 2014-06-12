<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/12/14
 * Time: 9:23 AM
 */

class Controller_Contact_Form extends Controller_Abstract{
    //controller for the Contact Us form

    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function submitted()
    {
        /*controller sends to model to update submit
        *to TRUE so that the model can submit
        *the email, name, and contents
        */
        $this->model->submit = true;
    }



} 