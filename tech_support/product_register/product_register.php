<main>
<h1>Register Product</h1>


  <form action="." method="post" id="">
          <input type="hidden" name="action"
                 value="product_register_complete">
          <input type="hidden" name="customerID"
                 value="<?php echo $customer['customerID']; ?>">
          <label>Customer:</label><?php echo " "; echo $customer['firstName']; echo ' '; echo $customer['lastName'];?>
          <br>
          <Label>Products:</Label> <select name='productCode'>

            <?php foreach($products as $product) {?>
      <option value="<?php echo $product['productCode']; ?>"><?php echo $product['name'];?></option>
    <?php }?>
<br>
<br>
<br>
<input type="submit" value="Register Product">
      </form>



</main>
