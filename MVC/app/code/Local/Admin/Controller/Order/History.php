<?php 

class Admin_Controller_Order_History extends Core_Controller_Admin_Action{
    public function formAction(){
        $layout = $this->getLayout();
        $this->includeCss('form.css');
        $child = $layout->getchild('content'); 
        $orderHistory = $layout->createBlock('sales/order_admin_history');
        $child->addchild('history', $orderHistory);
        $layout->toHtml();
    }
    public function saveAction()
    {
        $data = $this->getRequest()->getparams("history");
        Mage::getModel('sales/order_history')->saveHistory($data);

        // $this->setRedirect("");
    }
}

?>