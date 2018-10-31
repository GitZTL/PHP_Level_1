<?php
	namespace twoless\service;
	class Autoloader{
   		public $root = "twoless\\";
    	function loadClass($className)
	{
     
        $className = str_replace($this->root, "", $className);
        $filename = '..\\' . $className . '.php';
        if (file_exists($filename)) {
            require_once($filename);
        }
    }
}