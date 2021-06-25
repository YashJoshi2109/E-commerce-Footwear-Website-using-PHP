<!DOCTYPE HTML>
<html>
	<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
    <?php
	include("head.php");
	include("navbar.php");
	?>
    <script type="text/javascript" src="logvalid.js"></script>
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		
		<?php
		include("breadcrumbs.php");
		?>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body" align="center">
                            <h3 class="card-title">Login</h3>
                                <div class="contact-wrap">
                                        <form name="log" method="POST" action="login.php">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="userName">Username</label>
                                                    <input type="text" name="userName" id="userName" class="form-control" placeholder="Provide your valid Username">
                                                    <div class="container">
                                                        <div class="row container" id="errDivuser1" style="color:red"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="logpass">Password</label>
                                                    <input type="password" name="logpass" id="logpass" class="form-control" placeholder="Provide your valid password">
                                                    <div class="container">
                                                        <div class="row container" id="errDivpass1" style="color:red"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="submit" name="login" value="login" onclick="loginvalid(event)" class="btn btn-primary">
                                                </div>
                                            </div>
                                        </div>
                                    </form>		
                                    </div>
                            </div>
                    </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body"><center>
                    <h3 class="card-title">REGISTER</h3></center>
                        <div class="contact-wrap">
                                <form name="Valid" method="POST" action="insert_register.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fname">First Name</label>
                                            <input type="text" name="fname" id="fname" class="form-control" placeholder="Your firstname">
                                            <div class="container">
                                                <div class="row container" id="errDivfname" style="color:red"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lname">Last Name</label>
                                            <input type="text" name="lname" id="lname" class="form-control" placeholder="Your lastname">
                                            <div class="container">
                                                <div class="row container" id="errDivlname" style="color:red"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="regusername">Username</label>
                                            <input type="text" name="regusername" id="regusername" class="form-control" placeholder="Provide your valid username">
                                            <div class="container">
                                                <div class="row container" id="errDivuser" style="color:red"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Your email address">
                                            <div class="container">
                                                <div class="row container" id="errDivemail" style="color:red"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="mobile">Mobile</label>
                                            <input type="text" name="mobile" id="mobile" class="form-control" minlength="10" maxlength="10" onkeypress="restrictAlphabets(event)" placeholder="Require your mobile">
                                            <div class="container">
                                                <div class="row container" id="errDivmob" style="color:red"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="compass">Password</label>
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Require your Password">
                                            <div class="container">
                                                <div class="row container" id="errDivpass" style="color:red"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="conpass">Confirm Password</label>
                                            <input type="password" name="conpass" id="conpass" class="form-control" placeholder="Require your Password">
                                            <div class="container">
                                                <div class="row" id="errDivcpass" style="color:red"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="submit" value="Submit" class="btn btn-primary" onclick="valid(event)">
                                        </div>
                                    </div>
                                </div>
                                </form>		
                                </div>
                            </div>
                </div>
            </div>
            </div>   
        </div>     
		
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	<script>
    function loginvalid(e) 
    {
					let user = document.forms["log"]["username"];
					let pass = document.forms["log"]["logpass"];
					let erruser = "";
					let errpass = "";

					if (user.value == "") {
						erruser = erruser + "<br>Enter valid Username";
					}
					
					if (pass.value.trim() == ""){
						errpass = errpass + "<br>Enter valid Password";
					}

				
					if (erruser != "") {
						document.getElementById("errDivuser1").innerHTML = erruser;
						e.preventDefault();
					}
					
					if (errpass != "") {
						document.getElementById("errDivpass1").innerHTML = errpass;
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