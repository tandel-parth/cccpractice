<?php
class View_Product{
    public $newObj;
    public function __construct(){
        $obj=new Model_Request();
        $id=$obj->getQueryData('product_id');
        //echo '$id'.$id;
        $obj=new Model_Abstract();
        $query=$obj->getQueryBuider()->select("ccc_product","*",['product_id'=>$id]);
        $result=$obj->getQueryExecutor()->exec($query);

        $row=$obj->getQueryExecutor()->FetchRow($result);
        //print_r($row);
        $this->newObj=new Model_Data_Object($row);
    }
    public function createForm(){
       // echo $this->rowObj->getproduct_id();
        $div='<div class="form-group">';
        $form='<div class="box">
                <div class="container">
                    <div class="title">Product Information</div>
                    <div class="content">';
                    $form .= '<form action="" method="POST">';

                    $form .= '<div class="user-details">';

                    $form .= '<div class="input-box">';
                    $form .= $this->creteTextField('pdata[product_id]', "Product ID: ", $this->newObj->getproduct_id(), "product_id", "Enter Product ID");
                    $form .= '</div><br>';
        
                    $form .= '<div class="input-box">';
                    $form .= $this->creteTextField('pdata[productName]', "Product Name: ", $this->newObj->getproductName(), "productName" , "Enter Product Name");
                    $form .= '</div><br>';
        
                    $form .= '<div  class="input-box">';
                    $form .= $this->creteTextField('pdata[sku]', "Sku: ", $this->newObj->getsku(), "sku", "Enter SKU");
                    $form .= '</div><br>';
        
                    $form .= '<div  class="input-box-1">';
                    $form .= $this->creteSpan("Product Type: ", "productType") . "<br>";
                    $form .= $this->creteRadioButton('pdata[productType]', "Simple", $this->newObj->getproductType(),"simpleType") . "<br>";
                    $form .= $this->creteRadioButton('pdata[productType]', "Bundle", $this->newObj->getproductType(),"bundleType");
                    $form .= '</div><br>';
        
                    $form .= '<div  class="input-box">';
                    $categories = ["--Select--", "Bar & Game Room", "Bedroom", "Decor", "Dining & Kitchen", "Lighting", "Living Room", "Mattresses", "Office", "Outdoor"];
                    $form .= $this->creteSelect('pdata[category]', "Category: ", $categories ,$this->newObj->getcategory(), "category");
                    $form .= '</div><br>';
                    
                    $form .= '<div class="input-box">';
                    $form .= $this->creteTextField('pdata[manufacturerCost]', "Manufacturer Cost: ", $this->newObj->getmanufacturerCost(), "manufacturerCost", "Enter Manufacturer Cost");
                    $form .= '</div><br>';
                    
                    $form .= '<div class="input-box">';
                    $form .= $this->creteTextField('pdata[shippingCost]', "Shipping Cost: ", $this->newObj->getshippingCost(), "shippingCost", "Enter Shipping Cost");
                    $form .= '</div><br>';
                    
                    $form .= '<div class="input-box">';
                    $form .= $this->creteTextField('pdata[price]', "Price: ", $this->newObj->getprice(), "price", "Enter Price");
                    $form .= '</div><br>';
                    
                    $form .= '<div class="input-box">';
                    $status= ["--Select--", "Enabled", "Disabled"];
                    $form .= $this->creteSelect('pdata[status]', "Status: ", $status,  $this->newObj->getstatus(),"status");
                    $form .= '</div><br>';
        
                    $form .= '<div class="input-box">';
                    $form .= $this->creteDateField('pdata[createdAt]', "Created At: ", $this->newObj->getcreatedAt(), "createdAt");
                    $form .= '</div><br>';
        
                    $form .= '<div class="input-box">';
                    $form .= $this->creteDateField('pdata[updatedAt]', "Updated At: ", $this->newObj->getupdatedAt(), "updatedAt");
                    $form .= '</div><br>';
                    
                    $form .= '</div>'; 

                    $form .= '<div class="button">';
                    $form .= $this->creteSubmitBtn('Submit');
                    $form .= '</div><br>';
        
                    $form .= '</form>'; 
                    $form.=' </div>
                </div>
            </div>';
        return $form;
    }
    public function creteTextField($name, $title, $value = '', $id = '',$placeholder='')
        {
            return '<span class="details"> ' . $title . ' </span><input id="' . $id . '" type="text" name="' . $name . '" value="' . $value . '" placeholder="' . $placeholder . '">';
        }
        public function creteSpan($title, $id = '')
        {
            return '<span for="' . $id . '" class="details"> ' . $title . ' </span>';
        }
        public function creteRadioButton($name, $label, $value='',$id = '')
        {
            return '<input type="radio" id="'.$id.'" name="'.$name.'" value="'.$label.'"'.(($value==$label)?'checked':'').'>'." ".$label.'';
        }
        public function creteSelect($name, $title, $array, $value='', $id = '')
        {
            $var = '<span for="' . $id . '" class="details"> ' . $title . ' </span>';
            $var .='<select id="'.$id.'" name="'.$name.'" value="'.$value.'">';
            foreach ($array as $val) {
            $var.='<option value="'. $val .'"'. (($value == $val) ? 'selected' : '') .'>' . $val . '</option>';
        }
            $var .= '</select>';

            return $var;
        }
        public function creteDateField($name, $title, $value,$id = '')
        {
            return '<span class="details"> ' . $title . ' </span><input id="' . $id . '" type="date" name="' . $name . '" value="' . $value . '">';
        }
        public function creteSubmitBtn($title)
        {
            return '<input type="submit" name="submit" value="' . $title . '">';
        }
    public function toHtml(){
        $css='<link rel="stylesheet" href="..\View\CSS\stylesss.css">';
        $form=$this->createForm();
        return $css.$form;
               
    }

}
?>
