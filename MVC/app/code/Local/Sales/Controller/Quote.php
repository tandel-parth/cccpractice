<?php

class Sales_Controller_Quote extends Core_Controller_Front_Action
{
    public function addAction()
    {
        echo "<pre>";
        $request = $this->getRequest()->getParams('cart');
        $quote = Mage::getSingleton("sales/quote");
        $quote->addProduct($request);
            $this->setRedirect('cart/index/cart');
    }
    public function deleteAction()
    {
        $request = ['quote_id' => $this->getRequest()->getParams('quote_id'),
                    'item_id' => $this->getRequest()->getParams('item_id')];
        $quote = Mage::getSingleton("sales/quote")
            ->deleteProduct($request);
            $this->setRedirect('cart/index/cart');
    }
    public function updateAction()
    {
        $request = $this->getRequest()->getParams('upd_cart');
        $quote = Mage::getSingleton("sales/quote")
            ->updateProduct($request);
            $this->setRedirect('cart/index/cart');
    }

    public function saveAction()
    {
        $address = $this->getRequest()->getparams("checkout_customer");
        Mage::getSingleton('sales/quote')->saveAddress($address);

        $payment = $this->getRequest()->getparams("payment");
        Mage::getSingleton('sales/quote')->savePayment($payment);

        $shipping = $this->getRequest()->getparams("shipping");
        Mage::getSingleton('sales/quote')->saveShipping($shipping);

        Mage::getSingleton('sales/quote')->getConvertQuoteToOrder();

        Mage::getSingleton('core/session')->remove('quote_id');

        $this->setRedirect("");
    }
}