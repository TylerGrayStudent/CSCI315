<?php
/**
 * Created by PhpStorm.
 * User: tyler
 * Date: 9/26/18
 * Time: 11:52 AM
 */

    $dsn = 'mysql:host=192.168.64.2;dbname=sports_management_sw_db';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>