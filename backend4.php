<?php
$serverName = 'localhost';
$userName = 'root';
$hostPass = '';
$dbName = 'activepulse';
$conn = mysqli_connect($serverName, $userName, $hostPass, $dbName);

if ($conn) {
    if (isset($_GET['userEmail'])) {
        $userEmail = $_GET['userEmail']; // Get the user email from the URL
        echo
        '
        <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}

nav {
    height: 70px;
    background-color: #f9f9f9;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

ul {
    display: flex;
    align-items: center;
    list-style: none;
    gap: 20px; /* Add space between nav items */
}

.logo img {
    width: 120px; /* Adjust logo size */
    height: auto;
    mix-blend-mode: multiply;
}

nav ul li {
    list-style: none;
    white-space: nowrap; /* Prevents text wrapping */
}

nav ul li a {
    text-decoration: none;
    color: black;
    font-size: 18px;
    font-weight: bold;
    padding: 8px 15px;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;
    display: inline-block;
}

nav ul li a:hover {
    background-color: black;
    color: white;
    border-radius: 5px;
}

#userImg {
    position: relative;
    margin-left: 100%; /* Pushes user image to the right */
    cursor: pointer;
}

#userImg img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    border: 3px solid #ddd;
}

.blockNav {
    display: none; /* Hide dropdown initially */
    position: absolute;
    top: 110%;
    left: 50%;
    transform: translateX(-50%);
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 10px;
    width: 180px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 10px 0;
    z-index: 10;
}

.blockNav a {
    display: block;
    padding: 8px 12px;
    text-decoration: none;
    font-size: 16px;
    color: rgb(88, 88, 88);
    transition: background-color 0.3s ease, color 0.3s ease;
}

.blockNav a:hover {
    background-color: #f0f0f0;
    color: black;
}

#userImg:hover .blockNav {
    display: block; /* Show dropdown on hover */
}


* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}



body {
    font-family: "Arial", sans-serif; /* Set a default font for better readability */
    background-color: #f4f4f4; /* Light background for contrast */
    color: #333; /* Dark text for readability */
}

form:hover{
    border: 2px solid rgba(255, 255, 255, 0.8); /* Brighter border on hover */
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15), 0px 0px 10px rgba(255, 255, 255, 0.8); /* Enhanced shadows on hover */

}
form {
    margin: 4% auto; /* Center the form */
    border: 1px solid #ccc; /* Add a subtle border */
    border-radius: 8px; /* Rounded corners */
    width: 90%; /* Responsive width */
    max-width: 700px; /* Max width for larger screens */
    padding: 20px;
    background-color: #fff; /* White background for the form */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
}

.logoImg img {
    width: 100%; /* Make logo responsive */
    max-width: 300px; /* Limit max width */
    margin: 0 auto; /* Center the logo */
    display: block; /* Centering with margin auto */
    mix-blend-mode: multiply;
}

#allinOne {
    margin-top: 20px;
}

#allinOne label {
    display: block;
    font-size: 1.2rem; /* Slightly smaller for better hierarchy */
    font-weight: bold;
    margin-bottom: 5px; /* More space between label and input */
    color: #555; /* Slightly lighter color for labels */
}

#allinOne input,
select {
    width: 100%; /* Full width for inputs */
    height: 50px; /* Consistent height */
    padding: 10px; /* Increased padding for comfort */
    font-size: 1.2rem; /* Consistent font size */
    border: 1px solid rgba(167, 165, 165, 0.5); /* Light white border */
    border-radius: 4px; /* Rounded corners */
    margin-bottom: 15px; /* Space between inputs */
    background-color: #f5f5f5; /* Light gray background */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1), inset 0px 1px 2px rgba(255, 255, 255, 0.6); /* Outer and inner shadows */
    outline: none; /* Remove default outline */
    color: #333; /* Text color */
    transition: all 0.3s ease; /* Smooth hover effect */
}

#allinOne input:focus,
select:focus {
    border-color: rgba(255, 255, 255, 0.8); /* Brighten the border on focus */
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2), inset 0px 1px 3px rgba(255, 255, 255, 0.9); /* Enhance shadows on focus */
    background-color: #ffffff; /* White background on focus */
    color: #000; /* Change text color for better contrast */
}

#submission {
    text-align: center; /* Center the submission button */
    margin-top: 2%;
}

#submission button {
    width: 80%; /* Responsive button width */
    padding: 10px; /* Consistent padding */
    font-size: 1.5rem; /* Slightly smaller font size */
    background-color: #000000; /* Bootstrap primary color */
    color: white;
    font-weight: bold;
    border: none; /* Remove default border */
    border-radius: 4px; /* Rounded corners */
    cursor: pointer;
    transition: background-color 0.8s; /* Smooth transition for hover */
}

#submission button:hover {
    background-color: rgb(196, 195, 195); /* Darker shade on hover */
    color: black;
}

@media (max-width: 600px) {
    form {
        width: 95%; /* Adjust form width for smaller screens */
    }

    #allinOne label {
        font-size: 1rem; /* Adjust label size for smaller screens */
    }

    #submission button {
        font-size: 1.2rem; /* Adjust button size for smaller screens */
    }
}
        </style>
        <nav>
                            <ul>
                                <li class="logo"><img src="logo.jpeg.jpg" alt="ImageNotFound"></li>
                                <li><a href="HomePage.php">Home</a></li>
                                <li><a href="Developer.php">About Us</a></li>
                                <li><a href="Contact.php">Contact Us</a></li>
                                <div id="userImg">
                                    <img src="userLogin.jpg" alt="ImageNotFound">
                                    <div class="blockNav">
                                        <a href="backend4.php?userEmail=' . urlencode($userEmail) . '">Profile and Settings</a>
                                        <a href="....">Privacy Center</a>
                                        <a href="....">Support</a>
                                        <a href="HomePage.php" onclick = "preventBack()">Logout</a>
                                    </div>
                                </div>
                            </ul>
                        </nav>
                        <form action="backend5.php" method="post" onsubmit = "return validation(event)">
  <div class = "logoImg">
  <img src="logo.jpeg.jpg" alt="NoImageFound">
  <div>
  <div id = "allinOne">
  <label >First Name</label>
  <input type = "text" id="firstName" placeholder="Enter First Name" name="firstName" required>
</div>
<div id = "allinOne">
  <label>Last Name</label>
  <input type = "text" placeholder = "Enter Last Name" id="lastName" name="lastName" required>
</div>
<div id="allinOne" style="display: none;">
  <label>Email</label>
  <input type = "text"placeholder = "Enter Email"id = "userEmail" name="userEmail" value = '.$userEmail.'  required>
</div>
<div id = "allinOne">
  <label>Password</label>
  <input type = "password"placeholder="Enter Password" id="userPass" name="password" required>
</div>
<div id = "allinOne">
  <label>BirthDate</label>
  <input type = "date" id="birthDate" name="birthDate"required>
</div>
<div id = "allinOne" class="weight">
  <label>Weight</label>
<input type ="number" placeholder="Kg" id="weightNumber" name="weightNumber" required>
<input type = "number" id="gramsNumber" placeholder ="grams" style = "margin-top :10px" name = "gramsNumber" required>
</div>
<div id = "allinOne">
<label>Height</label>
<input type ="number" id ="heightNumber"placeholder="ft" class="height" name="heightNumber"required>
<input type = "number" id = "inchesNumber" placeholder ="Inches" style = "margin-top :10px" name="inchesNumber"required>
</div>
<div id = "submission">
  <button>UPDATE</button>
</div>
</form> ';
   
echo '<script>
function validation(event){
   let firstName = document.getElementById("firstName").value.trim();
    let lastName = document.getElementById("lastName").value.trim();
    let userPass = document.getElementById("userPass").value.trim();
    const birthDateInput = document.getElementById("birthDate");
    const birthDate = new Date(birthDateInput.value);
    let todayDate = new Date();
    let weightInKilo = parseInt(document.getElementById("weightNumber").value);
    let weightInGrams = parseInt(document.getElementById("gramsNumber").value);
    let heightInFt = parseInt(document.getElementById("heightNumber").value);
    let heightInInch = parseInt(document.getElementById("inchesNumber").value);   
    if (!firstName || !lastName  || !userPass || !birthDateInput.value.trim()) {
        alert("Please Fill The Required Fields");
        return false; // Prevent form submission
    } else if (weightInKilo <= 0 || weightInGrams < 0 || heightInFt <= 0 || heightInInch < 0) {
        alert("Weight And Height Should be > 0");
        return false; // Prevent form submission
    } else if (weightInGrams >= 1000  ) {
        alert("Grams should not be more than or equal to 1000");
        return false; // Prevent form submission
    }
    else if(heightInInch >= 12)
    {
        alert("height in inches should not be more than or equal to 12")
    }
     else if (userPass.length < 8) {
        alert("Password Is Too Small");
        return false; // Prevent form submission
    } else if (birthDate >= todayDate) {
        alert("BirthDate Should Be Less than Today Date");
        return false; // Prevent form submission
    }

 return true;
};
</script>'  ;     

} else {
        echo "No user email parameter found.";
    }
} else {
    echo "Failed to connect to the database: " . mysqli_connect_error();
}
?>
