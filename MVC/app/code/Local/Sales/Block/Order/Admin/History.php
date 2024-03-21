<?php

class Sales_Block_Order_Admin_History extends Core_Block_Template{
    public function __construct(){
        $this->setTemplate("order/admin/history.phtml");
    }
    public function getHistory(){
        $historyId = $this->getRequest()->getQueryData('id');
        return Mage::getModel("sales/order_history")->load($historyId);
    }

}
?>