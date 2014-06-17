<?php


class View_Abstract {

    protected $data = array();

    const VIEW_PREFIX = 'Design';

    public function toHtml(){
        //Includes a file that corresponds to the class in which its called...
        $className = get_class($this);
        $fileName = self::VIEW_PREFIX . DS . ucwords(str_replace(
                '_', DS, str_replace(Controller_Front::VIEW_PREFIX . '_', '', $className))) . '.php';

        ob_start();
        try{
            include $fileName;
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }

    //magic getters and setters
    public function __get($property = false){
        if($property){
            return (array_key_exists($property, $this->data)) ? $this->data[$property] : false;
        }
    }

    public function __set($property = false, $value = false){
        if($property){
            return $this->data[$property] = $value;
        }

    }

    public function get($property = false){
        return $this->__get($property);

    }

    public function set($property = false, $value = false){
        return $this->__set($property, $value);

    }

    public function __toString(){
        return $this->toHtml();
    }



} 