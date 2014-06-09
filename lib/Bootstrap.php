<?php

//require_once in index.php

//Set include paths

//Register AutoLoader

$paths = array('app', 'lib');
foreach($paths as $path){
    set_include_path(getcwd() . DS . $path);
}

include('lib/AutoLoadingClass.php');
Lib_Autoloading::register();


final class Bootstrap{
	
	public static function run(){
		//Load front controller to match url
        $front = new Controller_Front();
        $frontArray = Controller_Front::match();
	}

	public static function getBaseUrl(){
		//Returns the base url of the application.
		$url = $_SERVER['SERVER_NAME'];
		echo 'base url'.$url;

	}
}
