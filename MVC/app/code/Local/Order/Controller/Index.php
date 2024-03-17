<?php 

class Order_Controller_Index extends Core_Controller_Front_Action{
    public function listAction(){
        $layout = $this->getLayout();
        $this->includeCss('list.css');
        $child = $layout->getchild('content'); 
        $orderList = $layout->createBlock('order/list');
        $child->addchild('list', $orderList);
        $layout->toHtml();
    }
}

?>