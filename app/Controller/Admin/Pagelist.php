<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/12/14
 * Time: 4:29 PM
 */

class Controller_Admin_Pagelist {
    //controller to handle the list of pages for the user

    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }
} 