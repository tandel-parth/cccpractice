<?php
include 'App/Code/Local/autoload.php';
include 'App/Mage.php';
class Ccc{
    public static function init(){
        $Mage = new Mage();
        echo $Mage->init(); 
    }
}
Ccc::init();
?>