<?php 
include("firstNavBar.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    opacity: 0;
    transition: opacity 1s ease-in-out;
}
body.loading{
    opacity: 1;
}
        </style>
    <link rel="stylesheet" href="style2.css?v=1.1">
    <link rel="stylesheet" href="style1.css?v=1.0">
    
</head>
<body>
<div class = "frontImg">
        <button id="signUP" onclick = 'changePage()'>SIGN UP</button>
        <p>Already a member ? <a href = "Login.php">Log In</a></p>
    </div>
<div id = "AboutGoals">
<div class = "goalsText">
<h1>Set Your Own Goals</h1>
<p>Achieving your dream body isn’t a dream anymore. Let us guide you through every step.
Let’s make your goals a reality. Start now!
</p>
<button onclick = 'changePage()'>Get Started</button>
</div>
<div class = "sideImage1">
<img src = "sideImg.png">
</div>
</div>

<div id ="Activity">
<div class="activityText">
    <h1>Perform Activities</h1>
    <p>Achieve your fitness goals by tracking every step of your journey. Whether you're crushing intense workouts at the gym, pushing your limits on a run, or enjoying the simple pleasure of a brisk walk, our fitness tracker is designed to keep you motivated and on track. Monitor your reps, distance, and calories burned in real-time and watch your progress transform into lasting results. Start today and make every activity count towards a healthier, stronger you</p>
    <button onclick = 'changePage()'>Get Started</button>
</div>
<div class = "sideImg2">
    <img src = "sideImg2.png">
</div>
</div>

<div id="Footer1">
        <div class="logo"><img src="logo.jpeg.jpg" alt="none"></div>
    <div class="userHelp">
        <h3>Help</h3>
        <p><a href="Login.php">LogIn/Register</a></p>
        <p><a href="Center.php">Privacy/Center</a></p>
        <p><a href="Support.php">Support</a></p>
        <p><a href="Developer.php">Developer</a></p>    
    </div>
    <div class="Info">
        <h3>About</h3>
        <p><a href="Contact.php">Contact Us</a></p>
        <p><a href="Login.php">Join Our Team</a></p>
    </div>
    <div class="Contacts">
        <h3>Connect</h3>
        <p><img src="https://img.freepik.com/premium-vector/art-illustration_929495-41.jpg?ga=GA1.1.809419605.1730151793&semt=ais_hybrid"><a href="FaceBook">FaceBook</a></p>
        <p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTyfzSbUYeUmuF2p8GEGKfRhF3lIwwmsTenA&s"><a href="Gmail">Gmail</a></p>
        <p><img src="https://img.freepik.com/free-vector/twitter-new-2023-x-logo-white-background-vector_1017-45422.jpg?ga=GA1.1.809419605.1730151793&semt=ais_hybrid"><a href="TwitterX">TwitterX</a></p>
    </div>
    </div>
    <div class="footer2">
        <p>© 2025 Active Pulse. All rights reserved</p>
        <p>
            <a href="Center.php">Privacy Policy</a>/
            <a href="tou.php">Terms of Use</a>/
            <a href="cookie.php">Cookie Policy</a>/
            <a href="cookiespre.php">Manage Cookie Preferences</a>
        </p>
    </div>
    <script>
        window.onload = function(){
            document.body.classList.add('loading');
        }
        function changePage(){
        window.location.href = "register.php";
    }
        </script>
</body>

</html>
 
