<?php
/**autoloading class to find unspecified classes
 * to help avoid includes and require_once in code files
 * spl_autoload_register is used
 */

class Lib_AutoLoading
{
    //AutoLoader function allows for specifying own terms
    //for finding the path of the files

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
        $fileName = implode(DS, explode('_', ucwords($className)));

        $folders = array('app', 'lib');

        $isFound = false;
        try {
            foreach($folders as $folder)
            {
                $file = ROOT . $folder . DS . $fileName . '.php';
                if(file_exists($file))
                {
                    $isFound = true;
                    require_once $file;
                }
            }
            if(!$isFound){
                throw new Exception('The requested file could not be found: ' . $file);

            }
        } catch(Exception $e){
            var_dump($e);
        }

	}
}