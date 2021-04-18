function passwordVisability() {
  var x = document.getElementById("password_input");
  var eye = document.getElementById("eye");
  var blackeye = document.getElementById("blackeye");
  if (x.type === "password") {
    x.type = "text";
    eye.style.display = "none";
    blackeye.style.display = "block";
  } else {
    x.type = "password";
    blackeye.style.display = "none";
    eye.style.display = "block";
  }
}

function loginpasswordVisability() {
  var x = document.getElementById("login_password_input");
  var eye = document.getElementById("logineye");
  var blackeye = document.getElementById("loginblackeye");
  if (x.type === "password") {
    x.type = "text";
    eye.style.display = "none";
    blackeye.style.display = "block";
  } else {
    x.type = "password";
    blackeye.style.display = "none";
    eye.style.display = "block";
  }
}

function legalpasswordVisability() {
  var x = document.getElementById("legal_password_input");
  var eye = document.getElementById("legaleye");
  var blackeye = document.getElementById("legalblackeye");
  if (x.type === "password") {
    x.type = "text";
    eye.style.display = "none";
    blackeye.style.display = "block";
  } else {
    x.type = "password";
    blackeye.style.display = "none";
    eye.style.display = "block";
  }
}
