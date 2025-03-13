<?php
include("firstNavBar.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
  <style>
body{
  opacity: 0;
  transition: opacity 1s ease-in-out;
}
body.barClass{
    opacity: 1;
}
    </style>
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="Register.css">
</head> 
<body>
<form action="backend1.php" method="post" onsubmit = "return validation(event)">
  <div class = 'logoImg'>
  <img src="logo.jpeg.jpg" alt="NoImageFound">
  <div>
  <div id = 'allinOne'>
  <label >First Name</label>
  <input type = 'text' id='firstName' placeholder="Enter First Name" name='firstName' required>
</div>
<div id = 'allinOne'>
  <label>Last Name</label>
  <input type = 'text' placeholder = "Enter Last Name" id='lastName' name='lastName' required>
</div>
<div id = 'allinOne'>
  <label>Email</label>
  <input type = 'text'placeholder = "Enter Gmail"id = 'userEmail' name='userEmail' required>
</div>
<div id = 'allinOne'>
  <label>Password</label>
  <input type = 'password'placeholder="Enter Password" id='userPass' name='password' required>
</div>
<div id = 'allinOne'>
  <label>BirthDate</label>
  <input type = 'date' id='birthDate' name='birthDate'required>
</div>
<div id = 'allinOne'>
  <label>Gender</label>
  <select id='userGender' name='userGender'required>
    <option value="None" disabled selected>Select Gender</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="others">Others</option>
</select>
</div>
<div id = 'allinOne' class='weight'>
  <label>Weight</label>
<input type ='number' placeholder='Kg' id='weightNumber' name='weightNumber' required>
<input type = 'number' id='gramsNumber' placeholder ='grams' style = 'margin-top :10px' name = 'gramsNumber' required>
</div>
<div id = 'allinOne'>
<label>Height</label>
<input type ='number' id ='heightNumber'placeholder='ft' class='height' name='heightNumber'required>
<input type = 'number' id = 'inchesNumber' placeholder ='Inches' style = 'margin-top :10px' name='inchesNumber'required>
</div>
<div id = 'submission'>
  <button>SIGN UP</button>
</div>
</form>
<script>
  window.onload = function(){
    document.body.classList.add('barClass');
  }
</script>
<script src="index1.js?v=1"></script>
</body>
 </html>
