<?php

//ToDo Bootstrap the App Here

//Include the bootstrap file that contains includes at top and is final class.

//Initialize App Run function which is contained in Bootstrap::run()

//error reporting on everything
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', getcwd() . DS);

require_once ROOT . 'lib/App.php';

/*session information for later

session_start();
if(!isset($_SESSION['userName']));
{
    echo 'found';
}
//redirect to login/signup page

$userName = $_SESSION['userName'];
$password = $_SESSION['password'];
*/

$bootstrap = new App();

App::run();








