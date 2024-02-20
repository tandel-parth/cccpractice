<?php
class Core_Controller_Front_Action
{
    protected $_layout = null;
 public function getLayout(){
    if (is_null($this->_layout)){
        $layout = Mage::getBlock('core/layout');
        // echo "<pre>";
        // print_r($layout);
        return $layout;
        // echo get_class($layout);
    }
    return $this->_layout;
 }
 public function getRequest(){
    return Mage::getModel('core/request');
 }
}