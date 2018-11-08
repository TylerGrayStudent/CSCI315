<?php
function get_all_products(){
    global $db;
    $query = 'SELECT * FROM products';
    $statement = $db->prepare($query);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}
function get_product_by_code($code){
  global $db;
  $query = 'SELECT * FROM products where productCode = :productCode';
  $statement = $db->prepare($query);
  $statement->bindValue(':productCode', $code);
  $statement->execute();
  $product = $statement->fetch();
  $statement->closeCursor();
  return $product;
}
?>
