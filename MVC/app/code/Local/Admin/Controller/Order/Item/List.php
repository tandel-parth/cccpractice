<?php 

class Admin_Controller_Order_Item_List extends Core_Controller_Admin_Action{
    public function listAction(){
        $layout = $this->getLayout();
        $this->includeCss('list.css');
        $child = $layout->getchild('content'); 
        $orderList = $layout->createBlock('order/admin_list');
        $child->addchild('list', $orderList);
        $layout->toHtml();
    }
}

?>