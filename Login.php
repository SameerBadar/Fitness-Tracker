<?php
include("firstNavBar.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="style1.css?v=1.0">
    <link rel="stylesheet" href="login.css?v=1.6">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div id="LoginDesign">
<div class = "LeftSide">
<h2>Log In</h2>
<form action="backend2.php?v=1" method="post" onsubmit="return validation(event)">
<div class="userEmail">
    <label>Email</label>
    <input type="email" id="enterEmail" name="enterEmail" required>
    <i class="fa-solid fa-envelope"></i>
</div>
<div class="userPass">
    <label>Password</label>
    <input type="password" id="enterPassword" name="enterPassword" required>
    <i class="fa-solid fa-eye" id="toggleIcon" onclick="togglePassword()"></i>
</div>

<button>LOG IN</button>
</form>
</div>
<div class = "rightSide">
<div><img src="back1.jpg" alt="NotFound" id="myImg"></div>
</div>
</div>

<script>
    window.onload = function() {
        document.body.classList.add('adding');
    };

    let images = ['back2.jpg','back3.jpg','back1.jpg'];
    let counter = 0;
    function imageGallery(){
        if(counter == 3){ counter = 0; }
        let imageElement = document.getElementById('myImg');
        imageElement.src = images[counter];
        counter++;
    }
    setInterval(imageGallery, 3000);

    function validation(event) {
        let userEmail = document.getElementById('enterEmail').value;
        let userPass = document.getElementById('enterPassword').value;
        const regex = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;
        
        if (!userEmail || !userPass) {
            alert("Please Fill The Required Field");
            return false;
        }
        if (userPass.length < 8) {
            alert("Password Is Too Small");
            return false;
        }
        if (!regex.test(userEmail)) {
            alert("Please Enter A Correct Email");
            return false;
        }
        return true;
    }

    function togglePassword() {
        let passwordField = document.getElementById("enterPassword");
        let icon = document.getElementById("toggleIcon");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }
</script>
</body>
</html>
