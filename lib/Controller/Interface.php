<?php

class Controller_Interface
{
    //interface for controllers

    protected $model;
    protected $controller;
    protected $action;
    protected $template;

    function __construct($model, $controller, $action)
    {
        $this-> controller = $controller;
        $this-> action = $action;
        $this-> model = $model;
    }



}
