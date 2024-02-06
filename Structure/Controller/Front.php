<?php
class Controller_Front{
    public function init(){
        $request=new Model_Request();
        $str = $request->getRequestUrl();
        $className = trim(str_replace("/","_",$str),"_");
        $className = "View_".ucwords($className);
        $LayoutClass = new $className;
        return $LayoutClass->toHtml();
    }
}