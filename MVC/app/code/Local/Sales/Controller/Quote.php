<?php

class Sales_Controller_Quote extends Core_Controller_Front_Action
{
    public function addAction() {
   
        $customerId = Mage::getSingleton("core/session")->get("logged_in_customer_id");
      
        if ($customerId) {
            $cartData = $this->getCartData();
            
            $productId = $this->getRequest()->getQueryData('id');
            if (!empty($productId) && isset($cartData[$productId])) {
                $product = $cartData[$productId];
                echo '<h2>Product Details</h2>';
                echo 'Product ID: ' . $productId . '<br>';
                echo 'Quantity: ' . $product['quantity'] . '<br>';
            } else {
                echo '<h2>Product Not Found in Cart</h2>';
            }
        } else {
           $this->setRedirect("customer/account/login");
        }
      }
}