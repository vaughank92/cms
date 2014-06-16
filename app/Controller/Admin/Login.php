<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/11/14
 * Time: 11:26 AM
 */

class Controller_Admin_Login extends Controller_Abstract {

    public $loggedIn = False;

    //dbName and tblName from Model

    public $dbName;
    public $tblName;

    public $model;

    protected $userName;
    protected $password;

    function __construct($model, $userName, $password)
    {
        $this->userName = $userName;
        $this->password = $password;
        $this->model = $model->newModel(new LoginModel());
    }

    public function postAction(){
        //Check username and password
        //Set sessions vars to persist
        //Set cookie

        //grab the username and password
        //Needed?*
        $userName = $_POST($userName);
        $password = $_POST($password);

        //remove quotes on strings and prepend backslash to make data safe
        $userName = mysql_real_escape_string(stripslashes($userName));
        $password = mysql_real_escape_string(stripslashes($password));

        //checks the username and password against the database from the specified table
        $query = "SELECT * FROM this->$tblName WHERE userName ='$userName'AND password='$password'";

        $queryResults = mysql_query($query);

        //mysql_query will return FALSE on error
        if($queryResults != FALSE)
        {
            //log session information, successful log in
            //looks to see if there is a session, if not starts one
            session_start();
            $_SESSION['userName'] = $userName;
            $_SESSION['password'] = $password;

            $loggedIn = true;
            $_SESSION['loggedIn'] = $loggedIn;

            //store userName for an hour
            //???
            setcookie('userName', $userName, time()+3600);
            setcookie('password', $password, time()+3600);

            return $loggedIn;
        }
        else
        {
            echo "Incorrect name or password";
        }
    }

        public function logSuccess()
        {
            /*sends loggedIn to the model
            * which if TRUE it will update
             * that the login was a success
             */
            $this->model->success = self::postAction();
        }
} 