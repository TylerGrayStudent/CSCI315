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
        $action = 'list_products';
    }
}

if($action == 'list_products'){
        $products = get_all_products();
    include('product_display.php');
}


else if ($action == 'delete_product') {
    $code = filter_input(INPUT_POST, 'code');
    if ($code == NULL || $code == FALSE) {
        $error = "Missing or incorrect code.";
        include('../errors/error.php');
    } else {
        delete_product($code);
        $action = NULL;
        header("Location: .");

    }
}

?>


