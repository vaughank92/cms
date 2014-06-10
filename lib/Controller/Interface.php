<?php

class Controller_Interface
{
    //interface for controllers

    protected $_model;
    protected $_controller;
    protected $_action;
    protected $_view;

    function __construct($model, $controller, $action)
    {
        $this->_controller = $controller;
        $this->_action = $action;
        $this->_model = $model;



        //create an object for model and template class
        //$this-> $model = new $model;
        //$this-> template = new Template($controller, $action);
    }

    function _setModel($modelName)
    {
        $this->_model = new $modelName();
    }

    function _setView($viewName)
    {

    }



}
