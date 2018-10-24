<?php
/**
 * Created by PhpStorm.
 * User: tyler
 * Date: 10/17/18
 * Time: 11:34 AM
 */
?>
<main>
  <h1>Customer Search</h1>

  <form action="." method="post">
          <input type="hidden" name="action"
                 value="display_customer">
          <input type="hidden" name="customerID"
                 value="<?php echo $customer['customerID']; ?>">
          <label>Last Name</label> <input type="text" name="name">
          <input type="submit" value="Search">
      </form>


</main>
