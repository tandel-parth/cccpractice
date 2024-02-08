<?php

class Core_Controller_Front{
    public function init(){
    $request = new Core_Model_Request();
    // echo $request->_getControllerName();
    // echo $request->_getModuleName();
    $actionName = $request->getActionName();
    $action = $actionName.'Action';
    // var_dump($actionName->$action());
    
    $className =  $request->getFullControllerClass();
    // $indexController = new Papge_Controller_Index();
    // $indexController->$actionName.'Action'();
    // echo $className;
    $indexSection = new $className();
        $indexSection->$action();
    }
}   