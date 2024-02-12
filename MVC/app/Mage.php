<?php

class Mage
{
    private static $baseDir = "E:/xampp/htdocs/CyberCom/MVC"; 
    public static function init()
    {
        $forntController = new Core_Controller_Front();
        $forntController->init();
    }
    public static function getSingleton($className)
    {
    }
    public static function getModel($className)
    {
        $className = str_replace('/','_Model_', $className);
        $className = ucwords($className,"_");
        return new $className;
    }
    public static function getBlock($className)
    {
        $className = str_replace('/','_Block_', $className);
        $className = ucwords($className,"_");
        return new $className;
    }
    public static function register($key, $value)
    {
    }
    public static function registry($key)
    {
    }
    public static function getBaseDir($subDir = null)
    {
        if($subDir){
            return self::$baseDir."/".$subDir;
        } 
            return self::$baseDir;
    }

}