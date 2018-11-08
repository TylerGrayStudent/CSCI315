<?php
/**
 * Created by PhpStorm.
 * User: tyler
 * Date: 10/17/18
 * Time: 11:34 AM
 */

?>


<?php
function get_all_customers(){
    global $db;
    $query = 'SELECT * FROM customers';
    $statement = $db->prepare($query);
    $statement->execute();
    $customers = $statement->fetchAll();
    $statement->closeCursor();
    return $customers;
}

function get_customer_by_name($name){
    global $db;
    $query = 'SELECT * FROM customers WHERE lastName LIKE :name';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $customers = $statement->fetchAll();
    $statement->closeCursor();
    return $customers;
}

function get_customer_by_email($email){
  global $db;
  $query = 'SELECT * FROM customers WHERE email = :email';
  $statement = $db->prepare($query);
  $statement->bindValue(':email', $email);
  $statement->execute();
  $customer = $statement->fetch();
  $statement->closeCursor();
  return $customer;
}

function get_customer_by_ID($customerID){
    global $db;
    $query = 'SELECT * FROM customers WHERE customerID = :customerID';
    $statement = $db->prepare($query);
    $statement->bindValue(':customerID', $customerID);
    $statement->execute();
    $customer = $statement->fetch();
    $statement->closeCursor();
    return $customer;
}

function update_customer_by_ID($customerID, $firstName, $lastName, $address, $city, $state,
$postalCode, $countryCode, $phone ,$email, $password ){
  global $db;
  $query = 'UPDATE customers SET firstName = :firstName,
  lastName = :lastName, address = :address, city = :city, state = :state,
  postalCode = :postalCode, countryCode = :countryCode, phone = :phone,
  email = :email, password = :password WHERE customerID = :customerID';
  $statement = $db->prepare($query);
  $statement->bindValue(':customerID', $customerID);
  $statement->bindValue(':firstName', $firstName);
  $statement->bindValue(':lastName', $lastName);
  $statement->bindValue(':address', $address);
  $statement->bindValue(':city', $city);
  $statement->bindValue(':state', $state);
  $statement->bindValue(':postalCode', $postalCode);
  $statement->bindValue(':countryCode', $countryCode);
  $statement->bindValue(':phone', $phone);
  $statement->bindValue(':email', $email);
  $statement->bindValue(':password', $password);
  $statement->execute();
  $statement->closeCursor();

}
