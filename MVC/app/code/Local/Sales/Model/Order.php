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
        $orderNumberConstant = 1000;
        $number = $this->getCollection()->getData();
        $arr = $number[sizeof($number)-1]->_data;
        $n = $arr["order_id"];
        $orderNumber = $orderNumberConstant + $n;
        $this->addData('order_number', "CCC-".$orderNumber);
    }
}