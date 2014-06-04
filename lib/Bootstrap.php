<?php

//Set include paths

//Register AutoLoader

include('lib/AutoLoadingClass.php');

Lib_Autoloading::register();

$controller = new Controller_Index();

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
