<?php

class Mage
{
    public static function init()
    {
        // $request = new Core_Model_Request();
        // echo $request->getRequestUrl(); 
        // $request = Mage::getModel('core/request');
        // return $request->getRequestUrl();

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
    public static function register($key, $value)
    {
    }
    public static function registry($key)
    {
    }
    public static function getBaseDir($subDir = null)
    {
    }

}