<?php
class Customer_Model_Register extends Core_Model_Abstract{
    public function init(){
        $this->_resourceClass = "Customer_Model_Resource_Register";
        $this->_collectionClass = "Customer_Model_Resource_Collection_Register";
    }   
}