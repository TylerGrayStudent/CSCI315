<?php
/**
 * Created by PhpStorm.
 * User: tyler
 * Date: 9/26/18
 * Time: 9:35 PM
 */
require ('../model/database.php');
require ('../model/product_database.php');

include '../view/header.php'?>
<?php date_default_timezone_set('America/New_York');?>

<?php
$action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'add_product_form';
    }
}

if($action == 'add_product_form'){
      //  $products = get_all_products();
    include('product_add_form.php');
}
else if($action ='add_product'){
    $code = filter_input(INPUT_POST, 'code');
    $name = filter_input(INPUT_POST, 'name');
    $version = filter_input(INPUT_POST, 'version', FILTER_VALIDATE_FLOAT);
    $releasedate = filter_input(INPUT_POST, 'releasedate');
    if($code == NULL  || $name == NULL || $version == NULL || $version == FALSE || $releasedate == NULL){
      // echo($code.$name.$version.$releasedate);
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } else{
        add_product($code,$name,$version,$releasedate);
        header("Location: ../index.php");
   }
}


?>

<?php include '../view/footer.php'?>
