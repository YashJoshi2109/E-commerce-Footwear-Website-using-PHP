<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="index.php">Shoe Commerce</a></div>
						</div>
						<div class="col-sm-5 col-md-3">
			            <form action="#" class="search-wrap">
			               <div class="form-group">
			                  <input type="search" class="form-control search" placeholder="Search">
			                  <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
			               </div>
			            </form>
			         </div>
		         </div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
							<ul>
								<li class="active"><a href="index.php">Home</a></li>
								<!-- <li class="has-dropdown">
									<a href="men.php">Men</a>
									<ul class="dropdown">
										<li><a href="product-deta.php">Product Detail</a></li>
										<li><a href="cart.php">Shopping Cart</a></li>
										<li><a href="checkout.php">Checkout</a></li>
										<li><a href="order-complete.php">Order Complete</a></li>
										<li><a href="add-to-wishlist.php">Wishlist</a></li>
									</ul>
								</li> -->
								<li><a href="products.php">Products</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
								<?php
									session_start();
									if(isset($_SESSION["username"]))
									{
										echo " <li class='has-dropdown cart'>
											   <a> HI, ".$_SESSION["username"]."</a>
											   <ul class='dropdown' style = 'display: none;'>
													   <li><a href='logout.php'>Logout</a></i>
														</ul>
														</li>";
									}
									else
									{
										echo '<li class = "cart"><a href="log-reg.php">Login/Register</a></li>';
									}
								?>
								<li class="cart"><a href="cart.php"><i class="icon-shopping-cart"></i>Cart
								[
									<?php
										$nproducts = 0;
										if(isset($_SESSION["cart"]))
										{
											$nproducts=count($_SESSION["cart"]);
										}
										echo $nproducts;
									?>
								]	</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
											<h3><a href="#">25% off (Almost) Everything! Use Code: IDEASPOINT</a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3><a href="#">Our biggest sale yet 100% off all summer shoes</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>