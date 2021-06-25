function validate(e) {
            let name1 = document.forms["contact-form"]["fname"];
            let name2 = document.forms["contact-form"]["lname"]
            let user = document.forms["contact-form"]["user"];
            let email1 = document.forms["contact-form"]["email"];
            let phone1 = document.forms["contact-form"]["mobile"];
            let message1 = document.forms["contact-form"]["message"];
            let add = document.forms["contact-form"]["address"];
            let errmsg = "";
            let errmsguser = "";
            let errmsgemail = "";
            let errmsgmobile = "";
            let errmsgsub ="";
            let errmsgmess = "";
            let errmsgadd = "";

            if (name1.value.trim() == "" || name2.value.trim() == "") {
                errmsg = errmsg + "Please enter your Full Name";
                }

            if (user.value.trim() == "") {
                errmsguser = errmsguser + "<br>Please enter your Username.";
            }

            if (email1.value.trim() == "" && email1.value.trim() == "" && email1.value.indexOf("@", 0) < 0) {
                errmsgemail = errmsgemail + "<br>Please enter your Email name.";
            }

            if (phone1.value.trim() == "") {
                errmsgmobile = errmsgmobile + "<br>Please enter your Mobile number";
            }

            if (message1.value.trim() == "") {
                errmsgmess = errmsgmess + "<br>Please enter your Message.";
            }

            if (message1.value.trim() == "") {
                errmsgsub = errmsgsub + "<br>Please enter your Subject.";
            }

			if (add.value.trim() == "") {
                errmsgadd = errmsgadd + "Please enter your Address.";
            }

            if (errmsg !== "") {
                document.getElementById("errDiv").innerHTML = errmsg;
                e.preventDefault();
            }

            if (errmsguser !== "") {
                document.getElementById("errDivuser").innerHTML = errmsguser;
                e.preventDefault();
            }

            if (errmsgemail !== "") {
                document.getElementById("errDivemail").innerHTML = errmsgemail;
                e.preventDefault();
            }
            if (errmsgmobile !== "") {
                document.getElementById("errDivmobile").innerHTML = errmsgmobile;
                e.preventDefault();
            }
            if (errmsgsub !== "") {
                document.getElementById("errDivsub").innerHTML = errmsgsub;
                e.preventDefault();
            }
            if (errmsgmess !== "") {
                document.getElementById("errDivmess").innerHTML = errmsgmess;
                e.preventDefault();
            }
            if (errmsgadd !== "") {
                document.getElementById("errDivadd").innerHTML = errmsgadd;
                e.preventDefault();
            }
        }
        function restrictAlphabets(e) {
            var x = e.which || e.keycode;
            if ((x >= 48 && x <= 57) || x == 8 || (x >= 35 && x <= 40) || x == 46)
                return true;
            else
                return false;

        }






// function validate(e) {
//     let name1 = document.forms["contact-form"]["fname"];
//     let name2 = document.forms["contact-form"]["lname"];
//     let email1 = document.forms["contact-form"]["email"];
//     let phone1 = document.forms["contact-form"]["mobile"];
//     let message1 = document.forms["contact-form"]["message"];
//     let add = document.forms["contact-form"]["address"];
//     let errmsg = "";

//     if (name1.value.trim() == "") {
//         errmsg = errmsg + "<br>Please enter your First name.";
//     }

//     if (name2.value.trim() == "") {
//         errmsg = errmsg + "<br>Please enter your Last name.";
//     }

//     if (email1.value.trim() == "" && email1.value.trim() == "" && email1.value.indexOf("@", 0) < 0) {
//         errmsg = errmsg + "<br>Please enter your Email name.";
//     }

//     if (email1.value.indexOf("@", 0) < 0) {
//         errmsg = errmsg + "<br>Please enter @ in your email.";
//     }

//     if (email1.value.indexOf(".", 0) < 0) {
//         errmsg = errmsg + "<br>Please enter .(dot) in your email.";
//     }

//     if (phone1.value.trim() == "") {
//         errmsg = errmsg + "<br>Please enter your Mobile number";
//     }

//     if (message1.value.trim() == "") {
//         errmsg = errmsg + "<br>Please enter your Message.";
//     }

//     if (add.value.trim() == "") {
//         errmsg = errmsg + "<br>Please enter your Address.";
//     }

//     if (errmsg !== "") {
//         document.getElementById("errDiv").innerHTML = errmsg;
//         e.preventDefault();
//     }
// }
// function restrictAlphabets(e) {
//     var x = e.which || e.keycode;
//     if ((x >= 48 && x <= 57) || x == 8 || (x >= 35 && x <= 40) || x == 46)
//         return true;
//     else
//         return false;

// }