<?php

class Cart_Controller_Index extends Core_Controller_Front_Action{
    public function cartAction(){
        $this->includeCss('carts.css');
        $layout = $this->getLayout();
        $child = $layout->getchild('content');
        $cart = $layout->createBlock('cart/cart');
        $child->addChild('cart',$cart);
        $layout->toHtml();
    }
}

?>