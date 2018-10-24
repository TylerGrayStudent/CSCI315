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
require ('../model/customer_database.php');


$action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == NULL) {
            $action = 'search_customer';
        }
    }
if($action == 'search_customer'){
  include ('search_customer.php');

}

else if($action == 'display_customer'){
    include ('search_customer.php');
    $name = filter_input(INPUT_POST, 'name');
    $customers = get_customer_by_name($name);
    include('display_customer.php');
}


else if ($action == 'update_customer_display') {
    $customerID = filter_input(INPUT_POST, 'customerID');
    $customer = get_customer_by_ID($customerID);
    include ('update_customer_display.php');

}

else if($action == 'update_customer'){
  $customerID = filter_input(INPUT_POST, 'customerID');
  $firstName = filter_input(INPUT_POST, 'firstName');
  $lastName = filter_input(INPUT_POST, 'lastName');
  $address = filter_input(INPUT_POST, 'address');
  $city = filter_input(INPUT_POST, 'city');
  $state = filter_input(INPUT_POST, 'state');
  $postalCode = filter_input(INPUT_POST, 'postalCode');
  $countryCode = filter_input(INPUT_POST, 'countryCode');
  $phone = filter_input(INPUT_POST, 'phone');
  $email = filter_input(INPUT_POST, 'email');
  $password = filter_input(INPUT_POST, 'password');
  update_customer_by_ID($customerID, $firstName, $lastName, $address, $city, $state,
  $postalCode, $countryCode, $phone ,$email, $password );
  include ('search_customer.php');

}

?>
<?php include "../view/footer.php"?>
