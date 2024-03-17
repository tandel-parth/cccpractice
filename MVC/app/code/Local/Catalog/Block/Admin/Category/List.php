<?php

class Catalog_Block_Admin_Category_list extends Core_Block_Template{
    public function __construct(){
          $this->setTemplate("catalog/admin/category/list.phtml");
    }
    public function showList() {
        $findQues = $this->getRequest()->getQueryData('id');
        $productCollection = Mage::getModel('catalog/product')->getCollection();
        if($findQues){ 
            $productCollection = $productCollection->addFieldToFilter("category_id", $findQues);
        }
        return $productCollection;
    }
    function getCartData() {
        if (file_exists('cart_data.json')) {
            $cartData = json_decode(file_get_contents('cart_data.json'), true);
        } else {
            $cartData = array();
        }
        return $cartData;
    }

}