<?php

//Set include paths

//Register AutoLoader

$paths = array('app', 'lib');
foreach($paths as $path){
    set_include_path(getcwd() . DS . $path);
}

include('lib/AutoLoadingClass.php');

Lib_Autoloading::register();

$front = new Controller_Front();

//Controller_Front::match();

$frontArray = Controller_Front::match();

//autoload for file
$fileName = new $frontArray[0];

//call to the specific function
call_user_func($frontArray[2]);






final class Bootstrap{
	
	public static function run(){
		//Load front controller to match url
	}

	public static function getBaseUrl(){
		//Returns the base url of the application.
		//$url = $_SERVER['SERVER_NAME'];
		//echo $url;

	}
}
