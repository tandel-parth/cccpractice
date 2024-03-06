<?php

class Sales_Controller_Quote extends Core_Controller_Front_Action
{
    public function addAction()
    {
        echo "<pre>";
        $request = $this->getRequest()->getParams('cart');
        $quote = Mage::getSingleton("sales/quote")
            ->addProduct($request);
    }
}