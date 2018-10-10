<?php
/**
 * Created by PhpStorm.
 * User: tyler
 * Date: 9/26/18
 * Time: 10:02 PM
 */
?>
<h1>Product List</h1>
<table>
    <tr>
        <th>Code</th>
        <th>Name</th>
        <th>Version</th>
        <th>Release Date</th>
        <th>Delete Button</th>
    </tr>
    <?php foreach ($products as $product) : ?>
    <tr>
    <td><?php echo $product['code']; ?></td>
    <td><?php echo $product['name']; ?></td>
    <td><?php echo $product['version']; ?></td>
    <td><?php echo $product['releasedate']; ?></td>
        <td><form action="." method="post">
                <input type="hidden" name="action"
                       value="delete_product">
                <input type="hidden" name="code"
                       value="<?php echo $product['code']; ?>">
                <input type="submit" value="Delete">
            </form></td>
    </tr>
    <?php endforeach; ?>


</table>
<a href="../product_add/index.php">Add Product</a>

<?php include ('../view/footer.php')?>