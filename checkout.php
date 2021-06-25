<!DOCTYPE HTML>
<html>
<?php
include("head.php");
include("navbar.php");
?>

<head>
	<script type="text/javascript" src="addval.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
<script>
	$('#myModal').on('shown.bs.modal', function () {
	$('#myInput').trigger('focus')
	})
</script>

	<div id="page">
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
				<form method="POST" class="colorlib-form" action="insert_order.php" name="addressform">
					<div class="row">
						<div class="col-lg-8">
							<div class="row">
								<div class="col-md-12">
								<?php
									require("utils/conn.php");
								$sql = "SELECT address from address where username = '".$_SESSION["username"]."'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
						
									while ($row = $result->fetch_assoc()) {
										echo '<div class="row">';
										echo '<input type="radio" name="gender" value="$row["address"]">' . $row["address"];
										echo '</div>';
									}
								}
								?><br>
									<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
									Enter Address
									</button>
							</div>
						</div>
					</div>
						<div class="col-lg-4">
							<div class="row">
								<div class="col-md-12">
									<div class="cart-detail">
										<h2>Cart Total</h2>
										<ul>
											<li>
												<p><span>Subtotal:</span> <span><?php echo "Rs." . $_SESSION["sum"]; ?></span></p>
											</li>
											<li><span>Delivery</span><span>Rs.100</span></li>
											<li>
												<p><span><strong>Grand Total:</strong></span> <span><?php echo "Rs." . $_SESSION["fulltotal"]; ?></span></p>
											</li>
										</ul>
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
													<label><input type="checkbox" value=""> I have read and accept the terms and conditions.</label>
												</div>
											</div>
										</div>
										<button type="button" class="btn btn-dark" data-toggle="modal">
											Enter Address
										</button>
									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
		<form name="addressform1" action="insert_address.php" method="POST">
		<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="col-md-12">
								<div class="form-group">
									<label for="address">Address</label>
									<textarea rows="4" cols="60" placeholder="Enter Address" name="address" id="address"></textarea>
									<div class="row" id="errDivAdd" style="color:red"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-dark" onclick="validadd(event)">Save changes</button>
					</div>
				</div>
			</div>
		</form>
	<?php
	include("footer.php");
	include("footerlinks.php");
	?>
	<script>
		function validadd(e) {
					let add = document.forms["addressform1"]["address"];
					let erradd = "";

					if (add.value === "") {
						erradd = erradd + "<br>Please provide valid address";
					}
				
					if (erradd !== "") {
						document.getElementById("errDivAdd").innerHTML = erradd;
						e.preventDefault();
					}
				
			}
	</script>
</body>

</html>
