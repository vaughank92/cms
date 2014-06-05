<?php
class Controller_Front
{
	function __construct()
	{
		echo "in index";
	}

	public static function match($uri = false){
		$uri = ($uri) ? $uri : $_SERVER['uri'];
		//Start converting uri to controller::action
	}
}













