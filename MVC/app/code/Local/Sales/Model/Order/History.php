<?php

class Sales_Model_Order_History extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Sales_Model_Resource_Order_History';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Order_History';
    }
    public function saveHistory($data)
    {
        $orderData = Mage::getModel('sales/order')->getCollection()->addFieldToFilter('order_id', $data["order_id"])->getFirstItem();

        date_default_timezone_set('Asia/Kolkata');
        $submissionDate = date("Y-m-d");

        Mage::getModel('sales/order')
        ->setData($orderData->getData())
        ->addData('date', $submissionDate)
        ->addData('status', $data['to_status'])
        ->save();
        
        $historyData = Mage::getModel('sales/order_history')->getCollection()->addFieldToFilter('order_id', $data["order_id"])->getData();
        if (sizeof($historyData)) {
            $arr = $historyData[sizeof($historyData) - 1]->_data;
            $toStatus = $arr["to_status"];
        } else {
            $toStatus = "";
        }
        
        Mage::getModel('sales/order_history')
            ->setData($data)
            ->addData('date', $submissionDate)
            ->addData('from_status', $toStatus)
            ->save();
    }
    public function cancelRequest($data){
        date_default_timezone_set('Asia/Kolkata');
        $submissionDate = date("Y-m-d");
        $historyData = Mage::getModel('sales/order_history')->getCollection()->addFieldToFilter('order_id', $data["order_id"])->getData();
        if (sizeof($historyData)) {
            $arr = $historyData[sizeof($historyData) - 1]->_data;
            $toStatus = $arr["to_status"];
        } else {
            $toStatus = "";
        }
        
        Mage::getModel('sales/order_history')
            ->setData($data)
            ->addData('date', $submissionDate)
            ->addData('from_status', $toStatus)
            ->save();
    }
}

?>