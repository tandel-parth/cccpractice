<?php

class Sales_Model_Quote extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Sales_Model_Resource_Quote';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Quote';
    }

    public function initQuote()
    {
        $quoteId = Mage::getSingleton("core/session")->get("quote_id");
        if (!empty($quoteId)) {
            $this->load($quoteId);
        }
        if (!$this->getId()) {
            $quote = Mage::getModel("sales/quote")
                ->setData(["tax_percent" => 8, "grand_total" => 0])
                ->save();
            Mage::getSingleton("core/session")->set("quote_id", $quote->getId());
            $quoteId = $quote->getId();
            $this->load($quoteId);
        }
        // echo $quoteId;
        return $this;

    }

    public function getItemCollection()
    {
        return Mage::getModel('sales/quote_item')->getCollection() ///
            ->addFieldToFilter('quote_id', $this->getId());
    }

    protected function _beforeSave()
    {
        $grandTotal = 0;

        foreach ($this->getItemCollection()->getData() as $_item) {
            $grandTotal += $_item->getRowTotal();
        }
        if ($this->getTaxPercent()) {
            $tax = round($grandTotal / $this->getTaxPercent(), 2);
            $grandTotal = $grandTotal + $tax;
        }
        $this->addData('grand_total', $grandTotal);
    }

    public function addProduct($request)
    {
        // var_dump(debug_backtrace());
        $this->initQuote();
        if ($this->getId()) {
            Mage::getModel("sales/quote_item")->addItem($this, $request['product_id'], $request['qty']);
        }
        $this->save();
    }
    public function updateProduct($request)
    {
        // var_dump(debug_backtrace());
        $this->initQuote();
        if ($this->getId()) {
            Mage::getModel("sales/quote_item")->updateItem($request['quote_id'], $request['product_id'], $request['qty'], $request['item_id']);
        }
        $this->save();
    }
    public function deleteProduct($request)
    {
        // var_dump(debug_backtrace());
        $this->initQuote();
        if ($this->getId()) {
            Mage::getModel("sales/quote_item")->deleteItem($request['quote_id'], $request['item_id']);
        }
        $this->save();
    }
    public function saveAddress($request)
    {
        $quoteCustomerId = Mage::getSingleton('core/session')->get('quote_customer_id', 0);
        if (!$quoteCustomerId) {
            $result = Mage::getModel('sales/quote_customer');
            $result->setdata($request)->save();
            Mage::getSingleton('core/session')->set('quote_customer_id', $result->getId());
            if ($result) {
                echo "<script>alert('data inserted successfully!')</script>";
            }
        } else {
            Mage::getModel('sales/quote_customer')->setdata($request)
                ->addData("quote_customer_id",$quoteCustomerId)
                ->save();
        }
    }
    public function savePayment($request)
    {
        $paymentId = Mage::getSingleton('core/session')->get('payment_id');
        if (!$paymentId) {
            $result = Mage::getModel('sales/quote_payment');
            $result->setdata($request)->save();
            Mage::getSingleton('core/session')->set('payment_id', $result->getId());
            if ($result) {
                echo "<script>alert('data inserted successfully!')</script>";
            }
        } else {
            Mage::getModel('sales/quote_payment')->setdata($request)
                ->addData("payment_id",$paymentId)
                ->save();
        }
    }

    public function saveShipping($request)
    {
        $shippingId = Mage::getSingleton('core/session')->get('shipping_id', 0);
        if (!$shippingId) {
            $result = Mage::getModel('sales/quote_shipping');
            $result->setdata($request)->save();
            Mage::getSingleton('core/session')->set('shipping_id', $result->getId());
            if ($result) {
                echo "<script>alert('data inserted successfully!')</script>";
            }
        } else {
            Mage::getModel('sales/quote_shipping')->setdata($request)
                ->addData("shipping_id",$shippingId)
                ->save();
        }
    }
}

