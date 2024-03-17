<?php

class Catalog_Controller_Product extends Core_Controller_Front_Action{

    public function viewAction()
    {
        // $this->includeCss("products.css");
        $layout = $this->getLayout();
        $child = $layout->getchild('content'); //core_block_layout
        $productView = $layout->createBlock('catalog/product_view');
        $child->addChild('product_view',$productView);
        $layout->toHtml();
    }
}