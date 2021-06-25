<!DOCTYPE HTML>
<html>
	<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
   <?php
	include("head.php");
	include("navbar.php");
	?>
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		

		<?php
		include("breadcrumbs.php");
		?>


		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-sm-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center active">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<form method="POST" class="colorlib-form" name="addressform" action="insert_address.php">
					<div class="row">
						<div class="col-lg-8">
							<h2>Billing Details</h2>
							<div class="row">
								<div class="col-md-12">	
									<div class="form-group">
										<label for="address">Address</label>
										<br>
										<textarea rows="4" cols="93" id="address"name="address"></textarea>
										<div class="row container" id="errdivadd" style="color:red"></div>
									</div>
								</div>
							</div>
							<?php 
								require("utils/conn.php");
								$result=$conn->query("SELECT address from address where username = '".$_SESSION["username"]."'");
								if($result->num_rows > 0)
								{
									while($row = $result->mysqli_fetch_assoc())
									{
										echo '<div class="row">';
										echo '<input type="radio" name="gender" value='.$row["address"].'>'. $row["address"];
										echo '</div>';
									}
								}
							?>
						</div>
						<div class="col-lg-4">
							<div class="row">
								<div class="col-md-12">
									<div class="cart-detail">
										<h2>Cart Total</h2>
										<ul>
											<li>
												<span>Subtotal</span> <span><?php echo $_SESSION["sum"].".00";?></span>
											</li>
											<li><span>Shipping</span> <span>Rs. 120.00</span></li>
											<li><span>Order Total</span> <span><?php echo $_SESSION["fulltotal"].".00";?></span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="cart-detail">
								<h2>Payment Method</h2>
								<div class="form-group">
									<div class="col-md-12">
										<div class="radio">
											<label><input type="radio" name="optradio"> Direct Bank Tranfer</label>
										</div>
									</div>
								</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
												<label><input type="radio" name="optradio"> Check Payment</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
												<label><input type="radio" name="optradio"> Paypal</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
												<label><input type="checkbox" value=""> I have read and accept the terms and conditions</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 text-center">
									<p><button type="submit" class="btn btn-primary" onclick="validadd(event)">Place an order</button></p>
								</div>
							</div>

						</div>
					</div>	
				</form>
			</div>
		</div>

		<?php
		include("footer.php");
		include("footer_links.php");
	?>
	</div>
	<script>
		function validadd(e) {
					let add = document.forms["addressform"]["address"];
					let erradd = "";

					if (add.value === "") {
						erradd = erradd + "<br>Please provide valid address";
					}
				
					if (erradd !== "") {
						document.getElementById("errdivadd").innerHTML = erradd;
						e.preventDefault();
					}
				
			}
	</script>
	</body>
</html>