function loginvalid(e) {
					let user = document.forms["log"]["username"];
					let pass = document.forms["log"]["logpass"];
					let erruser = "";
					let errpass = "";

					if (user.value === "") {
						erruser = erruser + "<br>Enter valid username";
					}
					
					if (pass.value.trim() === ""){
						errpass = errpass + "<br>Enter valid Password";
					}

				
					if (erruser !== "") {
						document.getElementById("errDivuser").innerHTML = erruser;
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