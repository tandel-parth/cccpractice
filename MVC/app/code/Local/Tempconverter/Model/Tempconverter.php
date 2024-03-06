<?php

class Tempconverter_Model_Tempconverter extends Core_Model_Abstract{
    public function init(){
        $this->_resourceClass = "Tempconverter_Model_Resource_Tempconverter";
        $this->_collectionClass = "Tempconverter_Model_Resource_Collection_Tempconverter";
    }
    
}

?>