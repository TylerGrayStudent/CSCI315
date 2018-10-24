<?php
/**
 * Created by PhpStorm.
 * User: tyler
 * Date: 9/26/18
 * Time: 9:35 PM
 */
require ('../model/database.php');
require ('../model/technician_database.php');

include '../view/header.php'?>
<?php date_default_timezone_set('America/New_York');?>

<?php
$action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'add_technician_form';
    }
}

if($action == 'add_technician_form'){
      //  $products = get_all_products();
    include('add_technician_form.php');
}
else if($action ='add_technician'){
    $firstName = filter_input(INPUT_POST, 'firstName');
    $lastName = filter_input(INPUT_POST, 'lastName');
    $email = filter_input(INPUT_POST, 'email');
    $phone = filter_input(INPUT_POST, 'phone');
    $phonept1 = substr($phone,0,3);
    $phonept2 = substr($phone,3,3);
    $phonept3 = substr($phone,-4);
    $phone = $phonept1 . '-' . $phonept2 . '-' . $phonept3;
    $password = filter_input(INPUT_POST, 'password');
    if($firstName == NULL  || $firstName == '' || $lastName == NULL || $lastName == '' || $email == NULL || $email == '' || $phone == NULL || $phone == '' || $password == NULL || $password == ''){
      // echo($code.$name.$version.$releasedate);
        $error = "Invalid technician data. Check all fields and try again.";
        include('../errors/error.php');
        echo("<main><a href='index.php'>Try Again?</a></main>");

    } else{
        add_technician($firstName,$lastName,$email,$phone,$password);
        header("Location: index.php");
   }
}


?>

<?php include '../view/footer.php'?>
