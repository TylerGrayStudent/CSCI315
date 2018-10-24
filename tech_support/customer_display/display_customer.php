<?php
/**
 * Created by PhpStorm.
 * User: tyler
 * Date: 10/17/18
 * Time: 11:42 AM
 */
?>
<main>
    <h1>Results</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email Address</th>
            <th>City</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($customers as $customer) : ?>
            <tr>
                <td><?php echo $customer['firstName']; echo ' '; echo $customer['lastName']; ?></td>
                <td><?php echo $customer['email']; ?></td>
                <td><?php echo $customer['city']; ?></td>
                <td><form action="." method="post">
                        <input type="hidden" name="action"
                               value="update_customer_display">
                        <input type="hidden" name="customerID"
                               value="<?php echo $customer['customerID']; ?>">
                        <input type="submit" value="Submit">
                    </form></td>
            </tr>
        <?php endforeach; ?>


    </table>
    <br>

</main>
