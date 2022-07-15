function validate() {
  var domain = document.signupform.email.value.split("@").pop();
  var server = "imail.com";

  if (domain != server) {
    alert("Domail Name Should be imail.com");
    return false;
  }

  if (document.signupform.pwd1.value != document.signupform.pwd2.value) {
    alert("Pasword and Conform Password Should match");
    return false;
  }
  var phoneno = /^\d{10}$/;
  if (document.signupform.phone.value.match(phoneno)) {
    return true;
  } else {
    alert("Invalid Phone No");
    return false;
  }
  return true;
}
// NOTE: 1 sidebar script

var getmenuBtn = document.getElementById("menuButton");
var getsidebar = document.getElementById("sidebar");

// getsidebar.style.left = "-250px";

getmenuBtn.onclick = function () {
  if (getsidebar.style.left == "-250px") {
    getsidebar.style.left = "0px";
  } else {
    getsidebar.style.left = "-250px";
  }
};
