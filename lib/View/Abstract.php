<?php


class View_Abstract {

    public function toHtml(){
        //Includes a file that corresponds to the class in which its called...
        //$called = new get_called_class();
        echo get_class($this);
    }

} 