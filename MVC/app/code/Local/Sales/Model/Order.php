<?php

class Sales_Model_Order extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Sales_Model_Resource_Order';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Order';
    }
    protected function _beforeSave()
    {
        if(!$this->getId()){
            $orderNumber = $this->getLastOrderNumber();
            $this->addData('order_number', $orderNumber);
        }
    }
    public function getLastOrderNumber(){
        $orderNumberConstant = 1000;
        $number = $this->getCollection()->getData();
        if(sizeof($number))
        {
            $arr = $number[sizeof($number)-1]->_data;
            $n = $arr["order_id"];
        }else{
        $n = 0;

        }
        return "CCC-".($orderNumberConstant + $n);
    }
}