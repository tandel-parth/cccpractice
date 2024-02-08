<?php

class Page_Controller_Index{
    public function indexAction(){
     echo dirname(__FILE__);
    }
    public function saveAction(){
        echo "Save Page";
       }
}