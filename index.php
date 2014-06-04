<?php

//ToDo Bootstrap the App Here

//Include the bootstrap file that contains includes at top and is final class.

//Initialize App Run function which is contained in Bootstrap::run()
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', getcwd() . DS);

require_once ROOT . 'lib/Bootstrap.php';

$bootstrap = new Bootstrap();



