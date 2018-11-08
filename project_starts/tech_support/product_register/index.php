<?php
/**
 * Created by PhpStorm.
 * User: tyler
 * Date: 10/17/18
 * Time: 11:30 AM
 */
date_default_timezone_set('America/New_York');?>

<?php include "../view/header.php";?>
<?php
require('../model/database.php');
require('../model/customer_database.php');
require('../model/product_database.php');


$action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == NULL) {
            $action = 'customer_login';
        }
    }
if($action == 'customer_login'){
  include ('customer_login.php');

}

else if($action == 'register_product'){
$email = filter_input(INPUT_POST, 'email');
$customer = get_customer_by_email($email);
$products = get_all_products();
if($customer != null){
  include("product_register.php");
}
else{
  //throw the error
}

}

else if($action == 'product_register_complete'){
$customerID = filter_input(INPUT_POST, 'customerID');
$customer = get_customer_by_ID($customerID);
//Change tp get prduct by ID and display it. Pass on the emial name too.
$code = filter_input(INPUT_POST, 'productCode');
$product = get_product_by_code($code);
include("product_register_complete.php");


}





?>
<?php include "../view/footer.php"?>
