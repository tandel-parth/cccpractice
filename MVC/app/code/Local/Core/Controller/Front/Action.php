<?php
class Core_Controller_Front_Action
{
    protected $_layout = null;
    public function __construct()
    {
        Mage::getSingleton("core/session");
        $this->init();
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('headers.css')
            ->addCss('footer.css');
    }
    public function init(){
        return $this;
    }
    public function getLayout()
    {
        if (is_null($this->_layout)) {
            $this->_layout = Mage::getBlock('core/layout');
        }
        return $this->_layout;
    }
    public function getRequest()
    {
        return Mage::getModel('core/request');
    }
    public function includeCss($file = null)
    {
        if (!is_null($file)) {
            $this->_layout->getChild('head')->addCss($file);
        }
    }

    public function setRedirect($url){
        $url = Mage::getBaseUrla().$url;
        header('Location: '.$url);
    }
    
    public function linkAction() {
        $productId = $this->getRequest()->getQueryData('id');
        $id = $this->getRequest()->getQueryData('mainId');

        if (!empty($productId)) {
            $this->addToCart($productId);
            echo '<script>alert("Product added to cart successfully.")</script>';
            echo "<script>location.href='" . Mage::getBaseUrl() . '/catalog/category/view/?id=' . "$id'</script>";
        } else {
            echo '<script>alert("Invalid Product Id.")</script>';
        }
    }
    
    public function addToCart($productId) {
        $cartData = $this->getCartData();
        $productCollection = Mage::getModel('catalog/product')->getCollection()->addFieldToFilter("product_id", $productId);
        foreach ($productCollection->getData() as $product) {

        if (isset($cartData[$productId])) {
            $cartData[$productId]['quantity'] += 1;
        } else {
            $cartData[$productId] = array(
                'id' => $productId,
                'quantity' => 1, // Assuming default quantity is 1
                'name' => $product->getName(),
                'image' => $product->getImageLink(),
                'price' => $product->getPrice()
            );
        }
    }
        $this->saveCartData($cartData);
    }
    
    public function getCartData() {
        if (file_exists('cart_data.json')) {
            $cartData = json_decode(file_get_contents('cart_data.json'), true);
        } else {
            $cartData = array();
        }
        return $cartData;
    }
    public function saveCartData($cartData) {
        file_put_contents('cart_data.json', json_encode($cartData));
    }

    public function removeAction() {
        $productId = $this->getRequest()->getQueryData('id'); 
        $id = $this->getRequest()->getQueryData('mainId');
    
        if (!empty($productId)) {
            $this->removeFromCart($productId);
            echo '<script>alert("Product Remove to cart successfully.")</script>';
            echo "<script>location.href='" . Mage::getBaseUrl() . '/catalog/category/view/?id=' . "$id'</script>";
            exit;
        } else {
            echo '<script>alert("Invalid Product Id.")</script>';
        }
    }
    public function removeFromCart($productId) {
        $cartData = $this->getCartData();
    
        if (isset($cartData[$productId])) {
            unset($cartData[$productId]);
            $this->saveCartData($cartData);
        }
    }

    public function postdataAction() {  
        $cartData = $this->getCartData();
        
        $productId = $this->getRequest()->getQueryData('id');
        
        if (!empty($productId) && isset($cartData[$productId])) {
            $product = $cartData[$productId];
        ?>
        <h2>Product Details</h2>
        <img src="<?php echo Mage::getImagePath($product['image']) ?>" alt="" width="400px">
        <p>Image: <?php echo $product['image'] ?></p>
        <p>Product ID: <?php echo $productId ?></p>
        <p>Quantity: <?php echo $product['quantity'] ?></p>
        <p>Product Name: <?php echo $product['name'] ?></p>
        <p>Price: <?php echo $product['price'] ?></p>

        <?php

        } else {
            echo '<h2>Product Not Found in Cart</h2>';
        }
    }
}