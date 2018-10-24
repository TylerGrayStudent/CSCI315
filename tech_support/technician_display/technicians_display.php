<?php
/**
 * Created by PhpStorm.
 * User: tyler
 * Date: 9/26/18
 * Time: 10:02 PM
 */
?>
<main>
    <h1>Technician List</h1>
    <table>
        <tr>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($techs as $tech) : ?>
            <tr>
                <td><?php echo $tech['firstName']; ?></td>
                <td><?php echo $tech['lastName']; ?></td>
                <td><?php echo $tech['email']; ?></td>
                <td><?php echo $tech['phone']; ?></td>
                <td><?php echo $tech['password']; ?></td>
                <td><form action="." method="post">
                        <input type="hidden" name="action"
                               value="delete_technician">
                        <input type="hidden" name="techID"
                               value="<?php echo $tech['techID']; ?>">
                        <input type="submit" value="Delete">
                    </form></td>
            </tr>
        <?php endforeach; ?>


    </table>
    <br>

    <a href="../technician_add/index.php">Add Technician</a>

</main>