<?php

class Controller_Front
{
	function __construct()
	{
        //this is here to be sure the Controller_Front is active
		echo "in index </p>";
	}

	public static function match($uri = false){
		$uri = ($uri) ? $uri : $_SERVER['REQUEST_URI'];
        echo 'uri '.$uri.'</p>';

		//Start converting uri to controller::action
        $uriExploded = explode(DS, $uri);
        $size = count($uriExploded);
        echo 'size '.$size;
        $action = $uriExploded[$size-1];
        echo '<p> action= '.$action.'</p>';

       //removal needed [0] NULL,[1] index,[2] action
        if($uriExploded[1] == 'index')
        {
            if($size <= 4)
            {
                $action = NULL;
                unset($uriExploded[0], $uriExploded[1]);
            }
            else
            {
                unset($uriExploded[0],$uriExploded[1],$uriExploded[$size-1]);
            }
        }
        else
        {
            if($size <= 3)
            {
                $action = NULL;
                unset($uriExploded[0]);
            }
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
        $in_array = array($neededFile,$action,$converted);
        return $in_array;

	}
}













