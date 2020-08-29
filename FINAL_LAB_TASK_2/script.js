"use strict";

function f1() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var gender = document.getElementById("gender").value;
  var date = document.getElementById("date").value;
  var bGroup = document.getElementById("bGroup").value;
  var degree = document.getElementById("degree").value;
  var image = document.getElementById("image").value;

  var error = false;
  if (name == "") {
    document.getElementById("userMsg").innerHTML = "name Can't left empty!";
    error = true;
  }
  if (email == "") {
    document.getElementById("emMsg").innerHTML = "email Can't left empty!";
    error = true;
  }
  if (gender[0].checked == false) {
    document.getElementById("genMsg").innerHTML = "gender Can't be empty";
    error = true;
  }
  if (!date) {
    document.getElementById("dateMsg").innerHTML = "date Can't be empty";
    error = true;
  }
  if (bGroup == "") {
    document.getElementById("bgMsg").innerHTML = "blood group Can't be empty";
    error = true;
  }
  if (degree == "") {
    document.getElementById("dMsg").innerHTML = "degree Can't be empty";
    error = true;
  }
  if (!image) {
    document.getElementById("iMsg").innerHTML = "file Can't be empty";
    error = true;
  }

  if (error) {
    return false;
  } else {
    return true;
  }
}

var f2 = function () {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var gender = document.getElementById("gender").value;
  var date = document.getElementById("date").value;
  var bGroup = document.getElementById("bGroup").value;
  var degree = document.getElementById("degree").value;
  var image = document.getElementById("image").value;

  if (name != "") {
    document.getElementById("userMsg").innerHTML = "";
  }
  if (email != "") {
    document.getElementById("emMsg").innerHTML = "";
  }
  if (gender != "") {
    document.getElementById("genMsg").innerHTML = "";
  }
  if (date) {
    document.getElementById("dateMsg").innerHTML = "";
  }
  if (bGroup != "") {
    document.getElementById("bgMsg").innerHTML = "";
  }
  if (degree != "") {
    document.getElementById("dMsg").innerHTML = "";
  }
  if (image) {
    document.getElementById("iMsg").innerHTML = "";
  }
};
