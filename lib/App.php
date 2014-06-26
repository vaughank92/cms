<?php

//require_once in index.php
//Set include paths
//Register AutoLoader

set_include_path(getcwd() . DS . 'app:' . getcwd() . DS . 'app:.');


include('lib/AutoLoadingClass.php');
Lib_Autoloading::register();
include('lib/Registry.php');
//Lib_Registry::instance();



final class App{
	
	public static function run(){

       //$register = new App_Registry();
        //App_Registry::instance();
        //App_Registry::set('Controller_Abstract', new Controller_Abstract());

        //App_Registry::get('Controller_Abstract')->

		//Load Front controller to match url

        if(!self::getConfig()->get('is_installed')){
            Setup::setup();
        }
        $front = new Controller_Front();
        $frontArray = Controller_Front::match();
    }

    //Instead of using independent file for retrieving models
    public static function getModel($classIdentifier = false){
        if($classIdentifier){
            $className = 'Model_' . str_replace(' ', '_', ucwords(str_replace('_', ' ', $classIdentifier)));
            return new $className();
        }
        return false;
    }

    public static function getConfig(){
        return Config::instance();
    }

    public static function getBaseUrl(){
        return App::getConfig()->get('base_url');
    }
}
