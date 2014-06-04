<?php
/**autoloading class to find unspecified classes
* to help avoid includes and require_once in code files
* spl_autoload_register is used
*/

class Lib_AutoLoading
{
	//AutoLoader function allows for specifying own terms
	//for finding the path of the filess

	static protected $_instance;

	static public function instance()
	{
		if(!self::$_instance){
			self::$_instance = new Lib_AutoLoading();
		}
		return self::$_instance;
	}
	static public function register()
	{
		spl_autoload_register(array(self::instance(), 'autoLoad'));
	}

	public function autoLoad($className)
	{

		$exploded = explode('_', $className);

		echo $exploded[0];

		$folders = array('assets', 'lib');

		echo "</p> checking </p>";
		foreach($folders as &$layer)
		{
			echo $layer;

			if(file_exists($layer.'/'.$exploded[0]))
			{
				echo "found directory";
			}
			else
			{
				echo "nope".'</p>';
			}
		}

/*

		echo "does it work?";
		//array of folders to look through
		$folders = array('Controller', 'Model', 'View');
		
		//first if checks for files outside the folders
		if(file_exists($className.'.php'))
		{
			require_once($className.'.php');
			echo "outside file found";
			return;
		}

		//looks for matching folder names then the classname
		else
		{
			/*foreach will iterate through the folders
			*in order to find the file needed for the class
			
			foreach($folders as $folderName)
			{
				if(file_exists($folderName.DIRECTORY_SEPARATOR.$className.'.php'))
				{
					require_once($folderName.'_'.$className.'.php');
					echo "file found";
					return;
				}
			}
		}*/
	}
}