<?php

namespace lib_Controller;
/*location for all things FrontController related
* in order to parse the request of the URI
*/

//set parts for the uri as they are parsed
/*interface FrontControllerInterface
{
	public function setController($controller);
	public function setAction($action);
	public function setParams(array $params);
	public function run();
}

class FrontController implements FrontControllerInterface
{
	//setting constants to work with, can be changed later
	const DEFAULT_CONTROLLER = "IndexController";
	const DEFAULT_ACTION = "index";

	protected $controller = self::DEFAULT_CONTROLLER;
	protected $action = self::DEFAULT_ACTION;
	protected $params = array();
	protected $basePath = "cms.dev";

	public $options = array();*/


class Index
{
	function _construct()
	{
		echo "in index";
	}
}











}

