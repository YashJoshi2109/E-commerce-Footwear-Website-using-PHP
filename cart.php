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
					<div class="col-md-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center">
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
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="product-name d-flex">
							<div class="one-forth text-left px-4">
								<span>Product Details</span>
							</div>
							<div class="one-eight text-center">
								<span>Price</span>
							</div>
							<div class="one-eight text-center">
								<span>Quantity</span>
							</div>
							<div class="one-eight text-center">
								<span>Total</span>
							</div>
							<div class="one-eight text-center px-4">
								<span>Remove</span>
							</div>
						</div>
						<?php
						$_SESSION["sum"]=0;
								if(isset($_SESSION["cart"]) && count($_SESSION["cart"])>0)
								{
									foreach($_SESSION["cart"] as $citem)
									{ 
											$imgs = explode(",",$citem["pimg"]);
											echo '
												<div class="product-cart d-flex">
													<div class="one-forth">
													<div class="product-img" style="background-image: url(images/'.$imgs[1].');"></div>
													<div class="display-tc">
														<h3>"'.$citem["gender"].'\'s '.$citem["brand"].' '.$citem["pname"].'"</h3>
													</div>
													</div>
													<div class="one-eight text-center">
														<div class="display-tc">
															<span class="price">Rs. '.$citem["pamount"].'</span>
														</div>
													</div>
													<div class="one-eight text-center">
														<div class="display-tc">
															<h4><a href="add_to_cart.php?pid='.$citem["pid"].'"> + </a></h4>
															<input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="'.$citem["qty"].'" min="1" max="100">
															<h4><a href="remove_from_cart.php?pid='.$citem["pid"].'">-</a></h4>
														</div>
													</div>
													<div class="one-eight text-center">
														<div class="display-tc">
															<span class="price">'.$_SESSION["total"] = $citem["pamount"]*$citem["qty"].'</span>
														</div>
													</div>
													<div class="one-eight text-center">
															<div class="display-tc">
																<a href="delete_from_cart.php?pid='.$citem["pid"].'" class="closed"></a>
															</div>
													</div>
												</div>
												';
												$_SESSION["sum"] = $_SESSION["sum"] + $_SESSION["total"];
											}
									}
								if (isset($_SESSION["cart"]) && count($_SESSION["cart"])==0) {
									echo "<h4 align=center> :(  NO PRODUCT ADDED TO CART ):</h4>";
								}
						?>
				</div>
				</div>
				<?php
					$_SESSION["fulltotal"] =  $_SESSION["sum"] + 120; 
				?>
				<div class="row row-pb-lg">
					<div class="col-sm-12">
						<div class="total-wrap">
							<div class="row">
								<!-- <div class="col-sm-8">
									<form action="#">
										<div class="row form-group">
											<div class="col-sm-9">
												<input type="text" name="quantity" class="form-control input-number" placeholder="Your Coupon Number...">
											</div>
											<div class="col-sm-3">
												<input type="submit" value="Apply Coupon" class="btn btn-primary">
											</div>
										</div>
									</form>
								</div> -->
								<div class="col-sm-4 text-center">
									<div class="total">
										<div class="sub">
											<p><span>Subtotal:</span> <span><?php echo "Rs. ".$_SESSION["sum"];?></span></p>
											<p><span>Delivery:</span> <span>Rs. 120.00</span></p>
										</div>
										<div class="grand-total">
											<p><span><strong>Total:</strong></span><span><?php echo "Rs. ".$_SESSION["fulltotal"];?> </span></p>
											<div class="col-sm-12">
												<button type="submit" class="btn btn-dark"><a href="check_out.php">Check Out</a></button>
											</div>										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
						<h2>Related Products</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="images/item-1.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Womens Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="images/item-2.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Women's Minam Meaghan</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="images/item-3.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Men's Taja Commissioner</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="images/item-4.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Russ Men's Sneakers</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
		include("footer.php");
		include("footer_links.php");
	?>
	</body>
</html>
