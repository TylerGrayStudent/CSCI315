<?php
/**
 * Created by PhpStorm.
 * User: tyler
 * Date: 9/26/18
 * Time: 9:32 PM
 */
function get_all_products(){
    global $db;
    $query = 'SELECT * FROM products';
    $statement = $db->prepare($query);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}



function delete_product($code) {
    global $db;
    $query = 'DELETE FROM products
              WHERE code LIKE :code';
    $statement = $db->prepare($query);
    $statement->bindValue(':code', $code);
    $statement->execute();
    $statement->closeCursor();
}

function add_product($code, $name, $version, $releasedate) {
    global $db;
    $query = 'INSERT INTO products
                 (code, name, version, releasedate)
              VALUES
                 (:code, :name, :version, :releasedate)';
    $statement = $db->prepare($query);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':version', $version);
    $date = date('Y-m-d' , strtotime($releasedate));
    $statement->bindValue(':releasedate', $date);
    $statement->execute();
    $statement->closeCursor();
}
?>