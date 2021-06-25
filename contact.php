<!DOCTYPE HTML>
<html>
	<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
		<?php
			include("head.php");
			include("navbar.php");
		?>
	</head>
	<!-- <script src="js/validate.js"></script> -->
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<?php
			include("breadcrumbs.php");
		?>
		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3>Contact Information</h3>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location"></i></span> 198 West 21th Street, <br> Suite 721 New York NY 10016</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+91 9874563210</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">pranav@jugaadu.cf</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="jugaadu.cf">jugaadu.cf</a></p>
							</div>
						</div>
					</div>
				</div>
					<div class="row">
						<div class="col-md-6">
							<div class="contact-wrap">
								<h3>Get In Touch</h3>
								<form name="Valid" method="POST" action="add_contact_db.php">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="fname">First Name</label>
											<input type="text" name="fname" id="fname" class="form-control" placeholder="Your firstname">
											<div class="container">
												<div class="row container" id="errDiv" style="color:red"></div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="lname">Last Name</label>
											<input type="text" name="lname" id="lname" class="form-control" placeholder="Your lastname">
											<div class="container">
												<div class="row container" id="errDiv1" style="color:red"></div>
											</div>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" class="form-control" placeholder="Your email address">
											<div class="container">
												<div class="row container" id="errDiv4" style="color:red"></div>
											</div>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="subject">Subject</label>
											<input type="text" name="subject" id="subject" class="form-control" placeholder="Your subject">
											<div class="container">
												<div class="row container" id="errDiv5" style="color:red"></div>
											</div>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="message">Message</label>
											<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
											<div class="container">
												<div class="row container" id="errDiv7" style="color:red"></div>
											</div>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<input type="submit" value="Submit" class="btn btn-primary" onclick="valid(event)">
										</div>
									</div>
								</div>
							</form>		
							</div>
						</div>
						<div class="col-md-6">
							<div id="map" class="colorlib-map"></div>		
						</div>
					</div>
			</div>
		</div>
		<script>
			function valid(e) {
				let fname = document.forms["Valid"]["fname"];
				let lname = document.forms["Valid"]["lname"];
				let email = document.forms["Valid"]["email"];
				let subject = document.forms["Valid"]["subject"];
				let message = document.forms["Valid"]["message"];
				let errFname="";
				let errLname = "";
				let errEm = "";
				let errSub = "";
				let errMess = "";
				if (fname.value.trim() === "") {
					errFname = errFname + "Enter valid First Name";
				}
				if (lname.value.trim() === "") {
					errLname = errLname + "Enter valid Last Name";
				}
				if (email.value.indexOf(".", 0) < 0 && email.value.indexOf("@", 0) < 0 && email.value.trim() ==""){
					errEm=errEm + "<br>Enter valid Email";
				}
				if (subject.value == "") {
					errSub = errSub + "<br>Enter valid Subject";
				}
				if (message.value == "") {
					errMess = errMess + "<br>Enter valid Message";
				}
				if(errFname!==""){
					document.getElementById("errDiv").innerHTML = errFname;
					e.preventDefault(); 
				}
				if (errLname !== "") {
					document.getElementById("errDiv1").innerHTML = errLname;
					e.preventDefault();
				}
				// if (errUser !== "") {
				//     document.getElementById("errDiv2").innerHTML = errUser;
				//     e.preventDefault();
				// }
				// if (errNum !== "") {
				//     document.getElementById("errDiv3").innerHTML = errNum;
				//     e.preventDefault();
				// }
				if (errEm !== "") {
					document.getElementById("errDiv4").innerHTML = errEm;
					e.preventDefault();
				}
				if (errSub !== "") {
					document.getElementById("errDiv5").innerHTML = errSub;
					e.preventDefault();
				}
				// if (errAdd !== "") {
				//     document.getElementById("errDiv6").innerHTML = errAdd;
				//     e.preventDefault();
				// }
				if (errMess !== "") {
					document.getElementById("errDiv7").innerHTML = errMess;
					e.preventDefault();
				}
			}
		</script>
<?php
		include("footer.php");
		include("footer_links.php");
	?>
	</body>
</html>
