<?php
class Customer_Model_Resource_Register extends Core_Model_Resource_Abstract
{
    public function __construct()
    {
        $this->init('customer', 'customer_id');
    }
}