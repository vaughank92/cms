<?php

class Controller_Front
{
	function __construct()
	{
        //this is here to be sure the Controller_Front is active
		echo "in index </p>";
	}
    static protected $_instance;

    static public function instance()
    {
        if(!self::$_instance){
            self::$_instance = new Controller_Front();
        }
        return self::$_instance;
    }

    /**URI in format index/folder/file/function
     * or AKA controller/action
     * converted to controller::action
     * actual call is done in Bootstrap.php with a call_usr_func
     */
	public static function match($uri = false){
		$uri = ($uri) ? $uri : $_SERVER['REQUEST_URI'];
        echo 'uri '.$uri.'</p>';

		//Start converting uri to controller::action
        $uriExploded = explode(DS, $uri);
        $size = count($uriExploded);
        //echo 'size '.$size;
        $action = $uriExploded[$size-1];
        //echo '<p> action= '.$action.'</p>';

       //removal needed [0] NULL,[1] index,[2] action
        if($uriExploded[1] == 'index')
        {
            //if index is there but there is no action the class is called still
            if($size <= 4)
            {
                $action = NULL;
                unset($uriExploded[0], $uriExploded[1]);
            }
            else
            {
                //if index and action are present, coordinating function called
                unset($uriExploded[0],$uriExploded[1],$uriExploded[$size-1]);
            }
        }
        //if index and action not present, class can still be called
        else
        {
           if($size <= 3)
            {
                $action = NULL;
                unset($uriExploded[0]);
            }
            //action present but index is not
            else
            {
                unset($uriExploded[0],$uriExploded[$size-1]);
            }
        }
        /**implode with ' ',
         * upper case first character of each word
         * replace ' ' with '_' to make it a valid to search for
         */
        $neededFile = str_replace(' ', '_',ucwords(implode(' ', $uriExploded)));
        $converted = $neededFile.'::'.$action;
        //$in_array = array($neededFile,$action,$converted);
        //echo '<p> testing'.$in_array[0].'</p>';
        //var_dump($converted);
        //return $in_array;

        //if the needed file or the action is not available then kill it
        if(!(new $neededFile))
        {
            var_dump($neededFile); die;
        }
        if((call_user_func($converted)) == false)
        {
            var_dump($converted); die;
        }
	}
}













