<?php

class Core_Model_Session
{

    public function __construct()
    {
        session_start();
    }

    //customer/account/register - html form with fields for customer account 
    //customer/account/login-email pass and check login  is valid or not , 
    //use same action ad just put  validation on php side using ispost function
    //customer/account/save - post data and store in db and check if email exists
    //customer/account/dashboard - show details of cutomer
    //customer/account/forgotpassword - html page with email option and post on same action


    public function remove($key)
    {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }
    public function getId()
    {
        if (!is_null($_SESSION)) {
            return session_id();
        }
        return false;
    }

    public function __destruct()
    {

    }
    public function get($key)
    {
        if (array_key_exists($key, $_SESSION)) {
            return $_SESSION[$key];
        }
        return false;
    }

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
        return $this;
    }
}