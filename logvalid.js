function valid(e) 
{
					let fname = document.forms["Valid"]["fname"];
					let lname = document.forms["Valid"]["lname"];
					let user = document.forms["Valid"]["regusername"];
					let email = document.forms["Valid"]["email"];
					let mobile = document.forms["Valid"]["mobile"]; 
					let pass = document.forms["Valid"]["password"];
					let conpass = document.forms["Valid"]["conpass"];
					let errFname="";
					let errLname = "";
					let erruser = "";
					let errEm = "";
					let errMob = "";
					let errpass = "";
					let errCpass = "";
					let passnotpass = "";

					if (fname.value.trim() === "") {
						errFname = errFname + "Enter valid First Name";
					}
					if (lname.value.trim() === "") {
						errLname = errLname + "Enter valid Last Name";
					}
					if (user.value == "") {
						erruser = erruser + "<br>Enter valid username";
					}
					if (email.value.indexOf(".", 0) < 0 && email.value.indexOf("@", 0) < 0 && email.value.trim() ==""){
						errEm=errEm + "<br>Enter valid Email";
					}
					if (mobile.value.trim() == "") {
						errMob = errMob + "<br>Enter valid mobile";
					}
					if (pass.value.trim() === ""){
						errpass = errpass + "<br>Enter valid Password";
					}
					if (conpass.value.trim() === "") {
						errCpass = errCpass + "<br>Enter valid password";
					}
					if (conpass.value !== pass.value) {
						errCpass = errCpass + "<br>Password doesnt match!!";
					}


					if(errFname!==""){
						document.getElementById("errDivfname").innerHTML = errFname;
						e.preventDefault(); 
					}
					if (errLname !== "") {
						document.getElementById("errDivlname").innerHTML = errLname;
						e.preventDefault();
					}
					if (erruser !== "") {
						document.getElementById("errDivuser").innerHTML = erruser;
						e.preventDefault();
					}
					if (errEm !== "") {
						document.getElementById("errDivemail").innerHTML = errEm;
						e.preventDefault();
					}
					if (errMob !== "") {
						document.getElementById("errDivmob").innerHTML = errMob;
						e.preventDefault();
					}
					if (errCpass !== "") {
						document.getElementById("errDivcpass").innerHTML = errCpass;
						e.preventDefault();
					}
					if (errpass !== "") {
						document.getElementById("errDivpass").innerHTML = errpass;
						e.preventDefault();
					}
				
}
				
			function restrictAlphabets(e) {
					var x = e.which || e.keycode;
					if ((x >= 48 && x <= 57) || x == 8 ||
						(x >= 35 && x <= 40) || x == 46)
						return true;
					else
						return false;
				}