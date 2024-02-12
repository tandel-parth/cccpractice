<?php

class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        // echo '<pre>';
        $layout = $this->getLayout()->toHtml();
        // print_r($layout); 
        die();
        // echo dirname(__FILE__);
    }
    public function saveAction()
    {
        echo "Save Page";
    }
    public function listAction()
    {
        echo "List Page";
    }
}