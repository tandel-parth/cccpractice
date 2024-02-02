<?php
class Data_Object {
    protected $_row = [];
    public function __construct($row){
        $this->_row = $row;
    }
    public function __call($name, $args) {
        $name = substr($name, 3);
        return isset($this->_row[$name])
            ? $this->_row[$name]
            : "";

        print_r($name);
        
        echo "<br/>";
        // print_r($args);
    }
}
class View_Product
{
    public $newObj; 
    public function __construct()
    {
        $obj = new Model_Request();
        // var_dump($obj->getQueryData('id'));
        $id = ($obj->getQueryData('id'));
        $obj = new Lib_Sql_Query_Builder();
        $sql = $obj->select("ccc_product", "*", ["product_id" => $id]);
        // echo $sql;
        $test = $obj->exec($sql);
        // var_dump($test);

        // print_r($obj->fetchAssoc($test));
        $data = $obj->fetchData($test);
        // var_dump($data[0]);
        $this->newObj = new Data_Object($data[0]);
    }

    public function createForm()
    {
        $form = '<div class="box">
                    <div class="container">
                         <div class="title">Product Information</div>
                                <div class="content">';
        $form .= '<form action="" method="POST">';
        $form .= '<div>';
        $form .= $this->creteTextField('pdata[productName]', "Product Name: ", $this->newObj->getproductName(), "productName");
        $form .= '</div><br>';

        $form .= '<div>';
        $form .= $this->creteTextField('pdata[sku]', "Sku: ", "", "sku");
        $form .= '</div><br>';

        $form .= '<div>';
        $form .= $this->creteSpan("Product Type: ", "productType") . "<br>";
        $form .= $this->creteRadioButton('pdata[productType]', "Simple", "simpleType") . "<br>";
        $form .= $this->creteRadioButton('pdata[productType]', "Bundle", "bundleType");
        $form .= '</div><br>';

        $form .= '<div>';
        $form .= $this->creteSelect('pdata[category]', "Category: ", ["--Select--", "Bar & Game Room", "Bedroom", "Decor", "Dining & Kitchen", "Lighting", "Living Room", "Mattresses", "Office", "Outdoor"], "category");
        $form .= '</div><br>';
        $form .= '<div>';
        $form .= $this->creteTextField('pdata[manufacturerCost]', "Manufacturer Cost: ", "", "manufacturerCost");
        $form .= '</div><br>';

        $form .= '<div>';
        $form .= $this->creteTextField('pdata[shippingCost]', "Shipping Cost: ", "", "shippingCost");
        $form .= '</div><br>';

        $form .= '<div>';
        $form .= $this->creteTextField('pdata[price]', "Price: ", "", "price");
        $form .= '</div><br>';

        $form .= '<div>';
        $form .= $this->creteSelect('pdata[status]', "Status: ", ["--Select--", "Enabled", "Disabled"], "status");
        $form .= '</div><br>';

        $form .= '<div>';
        $form .= $this->creteDateField('pdata[createdAt]', "Created At: ", "createdAt");
        $form .= '</div><br>';

        $form .= '<div>';
        $form .= $this->creteDateField('pdata[updatedAt]', "Updated At: ", "updatedAt");
        $form .= '</div><br>';

        $form .= '<div>';
        $form .= $this->creteSubmitBtn('Submit');
        $form .= '</div><br>';

        $form .= '</form> 
            </div>
        </div>
    </div>';
        return $form;
    }

    public function creteTextField($name, $title, $value = '', $id = '')
    {
        return '<span> ' . $title . ' </span><input id="' . $id . '" type="text" name="' . $name . '" value="' . $value . '">';
    }
    public function creteSpan($title, $id = '')
    {
        return '<span for="' . $id . '"> ' . $title . ' </span>';
    }
    public function creteRadioButton($name, $title, $id = '')
    {
        return '<input id="' . $id . '" type="radio" name="' . $name . '"> <span for="' . $id . '" > ' . $title . ' </span>';
    }
    public function creteSelect($name, $title, $categories, $id = '')
    {
        $var = '<span for="' . $id . '" > ' . $title . ' </span>';
        $var .= "<select id='" . $id . "' name='" . $name . "'>";
        foreach ($categories as $cat) {
            $var .= '<option value="' . $cat . '">' . $cat . '</option>';
        }
        $var .= '</select>';

        return $var;
    }
    public function creteDateField($name, $title, $id = '')
    {
        return '<span> ' . $title . ' </span><input id="' . $id . '" type="date" name="' . $name . '">';
    }
    public function creteSubmitBtn($title)
    {
        return '<input type="submit" name="submit" value="' . $title . '">';
    }

    public function toHtml()
    {
        $form = $this->createForm();
        $css = '<link rel="stylesheet" type="text/css" href="View/style.css">';
        return $css . $form;
    }
}
