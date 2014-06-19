<?php

//require_once in index.php
//Set include paths
//Register AutoLoader

set_include_path(getcwd() . DS . 'app:' . getcwd() . DS . 'app:.');

include('lib/AutoLoadingClass.php');
Lib_Autoloading::register();


final class App{

	
	public static function run(){
		//Load Front controller to match url
        $front = new Controller_Front();
        $frontArray = Controller_Front::match();
	}

	public static function getBaseUrl(){
		//Returns the base url of the application.
		$url = $_SERVER['SERVER_NAME'];
		echo 'base url'.$url;
	}

    //Instead of using independent file for retrieving models
    public static function getModel($classIdentifier = false){
        if($classIdentifier){
            $className = 'Model_' . str_replace(' ', '_', ucwords(str_replace('_', ' ', $classIdentifier)));
            return new $className();
        }
        return false;
    }
}
