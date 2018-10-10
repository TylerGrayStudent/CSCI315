<?php
/**
 * Created by PhpStorm.
 * User: tyler
 * Date: 9/27/18
 * Time: 8:20 PM
 */
?>
<h1>Add Product</h1>
<form action="index.php" method="post" id="add_product_form">
    <input type="hidden" name="action" value="add_product">
    <br>

    <label>Code:</label>
    <input type="text" name="code" />
    <br>

    <label>Name:</label>
    <input type="text" name="name" />
    <br>

    <label>Version:</label>
    <input type="text" name="version" />
    <br>

    <label>Release Date:</label>
    <input type="text" name="releasedate" /><p>Use 'yyyy-mm-dd' format</p>
    <br>

    <label>&nbsp;</label>
    <input type="submit" value="Add Product" />
</form>
<br>
<br>

<a href="../index.php">View Product List</a>
