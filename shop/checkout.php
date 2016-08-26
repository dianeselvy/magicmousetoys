<?php include 'header.php' ?>

<div id="content">
<p>Shop > Checkout</p>
<hr>

	<div id="summary">
	
	<div id="summaryitem">
		<img src="http://placehold.it/155x155">
			<h3>Fairy Princess Costume</h3>
			<p>Size: Girls M</p>
			<p>Qty: <input type="number" name="points"  min="0" max="100" step="1" value="0"></p>
			<p><a href="#">Delete</a>  |  <a href="#">Add to Wishlist</a></p>
	</div>	
	<div id="summaryitem">
		<img src="http://placehold.it/155x155">
			<h3>Fairy Princess Costume</h3>
			<p>Size: Girls M</p>
			<p>Qty: <input type="number" name="points"  min="0" max="100" step="1" value="0"></p>
			<p><a href="#">Delete</a>  |  <a href="#">Add to Wishlist</a></p>
	</div>
	<div id="summaryitem">
		<img src="http://placehold.it/155x155">
			<h3>Fairy Princess Costume</h3>
			<p>Size: Girls M</p>
			<p>Qty: <input type="number" name="points"  min="0" max="100" step="1" value="0"></p>
			<p><a href="#">Delete</a>  |  <a href="#">Add to Wishlist</a></p>
	</div>
	<div id="summaryitem">
		<img src="http://placehold.it/155x155">
			<h3>Fairy Princess Costume</h3>
			<p>Size: Girls M</p>
			<p>Qty: <input type="number" name="points"  min="0" max="100" step="1" value="0"></p>
			<p><a href="#">Delete</a>  |  <a href="#">Add to Wishlist</a></p>
	</div>
	<br>
	
	<div id="checktotal">
	<p>Taxes: $5.99</p>
	<p>Shipping: 6.99</p>
	<p>Subtotal: $46.92</p>
	<p>Coupon Code: <input type="text" name="coupon">
	<h4>Grand Total:    $55.99</h4>
	</div><!-- end total -->
	<br>
	
<div id="customerinfo">
<div id="shipping">
	<br>
	<h3>Shipping Information</h3><br>
	<br>
	  <p>First Name:</p>	<input type="text" name="firstname">
  	  <p>Last Name:</p>	<input type="text" name="lastname">
  	  <p>Street Address:</p>	<input type="text" name="address">
  	  <p>City:</p>	<input type="text" name="city">
  	  <p>State:</p>	<input type="text" name="state">
  	  <p>Zip:</p>	<input type="text" name="zip">
  	  <p>Phone:</p>	<input type="text" name="phone">
  	  <input type="checkbox" name="vehicle" value="Bike"> Billing same as shipping<br>
</div><!-- end shipping -->
	
<div id="billing">
	<br>
	<h3>Billing Information</h3><br>
	  <p>First Name:</p>	<input type="text" name="firstname">
  	  <p>Last Name:</p>	<input type="text" name="lastname">
  	  <p>Street Address:</p>	<input type="text" name="address">
  	  <p>City:</p>	<input type="text" name="city">
  	  <p>State:</p>	<input type="text" name="state">
  	  <p>Zip:</p>	<input type="text" name="zip">
  	  <p>Phone:</p>	<input type="text" name="phone">
</div><!-- end billing -->
<a href="http://dianeselvy.com/web202/magicmouse/shop/confirmation.php"><input type="submit" style="background:red;color:white;border:none;margin-left:900px;margin-top:100px;padding:20px;font-size:20px;" value="SUBMIT ORDER"></a>
</div><!-- end customerinfo -->
</div> <!-- end moreinfo -->
</div><!-- end summary -->
</div><!-- end content -->
<footer>
<?php include 'footer.php' ?>
</footer>