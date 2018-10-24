<?php
/**
 * Created by PhpStorm.
 * User: tyler
 * Date: 9/27/18
 * Time: 8:20 PM
 */
?>
<main>
<h1>Add Technician</h1>
<form action="index.php" method="post" id="add_technician_form">
    <input type="hidden" name="action" value="add_technician">
    <br>

    <label>First Name:</label>
    <input type="text" name="firstName" />
    <br>

    <label>Last Name:</label>
    <input type="text" name="lastName" />
    <br>

    <label>Email:</label>
    <input type="text" name="email" />
    <br>

    <label>Phone:</label>
    <input type="text" name="phone" />
    <br>

    <label>Password:</label>
    <input type="text" name="password" />
    <br>

    <label>&nbsp;</label>
    <input type="submit" value="Add Technician" />
</form>
<br>
<br>

<a href="/book_apps/proj1/technician_display/index.php">View Technician List</a>
</main>
