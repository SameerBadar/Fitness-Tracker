
<?php
$hostName = 'localhost';
$user = 'root';
$password ='';
$dbName = 'activepulse';
$conn = mysqli_connect($hostName,$user,$password,$dbName);

if($conn){
    if($_SERVER['REQUEST_METHOD'] =="POST"){
        $userEmail = $_POST['enterEmail'];
        $userPass = $_POST['enterPassword'];
        $userWeight;
        $sql1 = "select userEmail,userPass,weightInKilo
        from register
        where userEmail = '$userEmail';
        ";
        if(mysqli_query($conn,$sql1)){
            $result = mysqli_query($conn,$sql1);
            //find The row of the result set
            $row = mysqli_fetch_assoc($result);
            if($row && $row['userEmail'] ==$userEmail){
                if($row['userPass']==$userPass){
                    $userWeight = $row['weightInKilo'];
                    echo "<script>alert('Account SuccessFully Login')</script>";
                    echo '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Active Pulse</title>
                        <style>
                            #userImg {
                                margin-left: 50%;
                                margin-top: 1%;
                                position: relative; /* Ensure .blockNav stays relative to #userImg */
                                border-radius: 50%;
                                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
                                border: 3px solid #ddd;
                            }
                            
                            #userImg img {
                                width: 60px;
                                height: 60px;
                                vertical-align: top;
                                cursor: pointer;
                                border-radius: 50%;
                                margin-left: 1%;
                                mix-blend-mode: multiply;
                                border: 2px solid white;
                            }
                            
                            .blockNav {
                                display: none; /* Initially hidden */
                                padding: 5px;
                                border-radius: 10px;
                                position: absolute;
                                top: 110%; /* Place slightly below the image */
                                left: 50%;
                                transform: translateX(-50%);
                                width: 150px;
                                background-color: #f9f9f9;
                                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                                border: 1px solid #ccc;
                            }
                            
                            .blockNav a {
                                color: rgb(88, 88, 88);
                                text-decoration: none;
                                font-size: 18px;
                                display: block; /* Make links stack vertically */
                                padding: 8px 10px;
                                border-bottom: 1px solid #eee;
                                transition: background-color 0.0s ease, color 0.0s ease;
                            }
                            
                            .blockNav a:last-child {
                                border-bottom: none; /* Remove bottom border for last link */
                            }
                            
                            .blockNav a:hover {
                                color: black;
                                transition: color 0.3s ease-in-out;
                                background-color: #f0f0f0;
                            }
                            
                            #userImg:hover .blockNav,
                            #userImg .blockNav:hover {
                                display: block;
                            }
                                #container{
                                border:0px solid black;
                                position:relative;
                                margin-top:4%;
                                padding:4px 2px 2px 2px;
                                height:1024px;
                                overflow:scroll;
                                }
                                .containerButtons{
                                margin-left:43%;
                                
                                }
                               .userActivities ,.userGoals{
                                margin-left:12px;
                                padding:5px;
                                padding-bottom:5px;
                                font-size:30px;
                                font-weight:bold;
                               color:rgba(48, 47, 47, 0.87); 
                                background-color:white;
                                cursor:pointer;
                              border:none;
                               
                               }
                               .userActivities{
                               width:15%;
                               }
                               .userGoals{
                             border-bottom:8px solid red;
                              
                               width:13%;
                               }
    .performActivity {
    position: absolute;
    border: 0px solid #ccc;
    border-radius: 15px;
    width: 40%;
    opacity: 1;
    visibility: hidden;
    transition: opacity 0.5s ease, visibility 0.5s ease;
    height: auto;
    min-height: 400px;
    padding: 20px;
    margin-left: 29%;
    margin-top: 3%;
    background-color: #f9f9f9;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
}
.performActivity form label {
    display: block;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 8px;
    color: #333;
}

.performActivity input {
    width: 100%;
    margin-bottom: 15px;
    height: 40px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    padding: 5px 10px;
    box-sizing: border-box;
}

.performActivity form {
    padding: 20px;
}

.performActivity button {
    width: 100%;
    height: 45px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.performActivity button:hover {
    background-color: #0056b3;
}
    select{
    padding:5px;
    width:100%;
    font-size:15px;
    }
textArea{
font-size:18px;
padding:5px;
}
              .stats{
              border:1px solid black;
              margin-top:100px;
              }     
              .specialP{
                    border:1px solid black;
                      width:100%;
                    height:100px;
                    display:flex;
                    justify-content:center;
                    background-color : #35424a;
                    padding-top:2%;
                    color:white;
                    
                    font-size:30px;
                    font-weight:bolder;
                    }  
                    
                    .activityHistory {
    border: 0px solid black;
    width: 80%;
    margin-left: 10%;
    margin-top: 2%;
    opacity: 1;
    visibility: visible;
    transition: opacity 0.5s ease, visibility 0.5s ease;
}
                    .specialP2{
                    margin-top:3%;
                    margin-left:2%;
                    font-size:1.6rem;
                    font-weight:bolder;
                    color:35424a;
                    }       
 .cardBody {
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);  
    
    }

#activityTable {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}
    

#activityTable thead {
    background-color: #35424a; /* Green background for the header */
    color: white; /* White text color */
}

#activityTable th, #activityTable td {
    padding: 12px 15px; /* Padding for table cells */
    text-align: left; /* Align text to the left */
    border-bottom: 1px solid #ddd; /* Bottom border for table rows */
}

#activityTable tr:hover {
    background-color: #f1f1f1; /* Light gray background on hover */
}

#activityTable th {
    font-weight: bold; /* Bold text for header */
}

#activityTable td {
    color: #333; /* Darker text color for table data */
}

/* Additional styles for tbody and its rows */
#activityTable tbody tr {
    transition: background-color 0.3s; /* Smooth transition for hover effect */
}

#activityTable tbody tr:hover {
    background-color: #f1f1f1; /* Light gray background on hover for tbody rows */
}

#activityTable tbody td {
    border-bottom: 1px solid #ddd; /* Bottom border for tbody cells */

    }






* {
    margin: 0;
    padding: 0;
}
#Footer1 {
    background-color: rgba(211, 211, 211, 1);
    height: 250px;
    margin-top: 10%;
    padding-bottom: 20px; /* Add padding at the bottom to create space between the body and footer */
}
.logo {
    margin-left: 7%;
    display: inline-block;
    vertical-align: top;
}
.logo img {
    width: 200px;
    height: 200px;
    mix-blend-mode: multiply;
}
.userHelp, .Info, .Contacts {
    display: inline-block;
    padding: 10px;
    height: 60%;
    margin-top: 3%;
    margin-left: 12%;
    vertical-align: top;
}
.userHelp p, .Info p, .Contacts p {
    margin-top: 4%;
}
.userHelp p a, .Info p a, .Contacts p a {
    text-decoration: none;
    color: rgb(95, 94, 94);
    font-size: 1.2rem;
}
.userHelp p a:hover, .Info p a:hover, .Contacts p a:hover {
    background-color: gray;
    color: white;
}
.Contacts p img {
    width: 30px;
    height: 25px;
    border-radius: 20px;
}

.footer2 {
    background-color: black;
    color: white;
    text-align: center;
    padding: 10px 0;
    font-size: 20px;
    clear: both; /* Ensure the footer is clear of previous floated content */
}
.footer2 p {
    margin: 0; /* Remove default margin for the footer text */
}
.footer2 a {
    color: white;
    text-decoration: none;
    margin: 0 10px;
}

.footer2 a:hover {
    text-decoration: none;
    background-color: white;
    color: black;
}


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


.main-body {
    font-family: "Arial", sans-serif;
    background: #f4f4f4; /* Neutral background */
    color: #333;
    height: 60vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
    padding: 20px;
}

.grid-wrapper {
    max-width: 1000px;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    justify-items: center;
}

.info-card {
    background: rgba(255, 255, 255, 0.9); /* Subtle white background */
    backdrop-filter: blur(12px);
    border-radius: 15px;
    padding: 30px;
    width: 100%;
    max-width: 320px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Lighter shadow */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: linear-gradient(145deg, #2f2f2f, #555555); /* Dark gray to light gray gradient */
}

.info-card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
}

.info-card h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    font-weight: 600;
    color: white; /* White color for headings */
}

.progress-circle {
    position: relative;
    width: 120px;
    height: 120px;
    margin: 0 auto;
    margin-bottom: 20px;
}

.progress-circle svg {
    width: 100%;
    height: 100%;
}

.progress-circle circle {
    fill: none;
    stroke-width: 10;
    transform: rotate(-90deg);
    transform-origin: 50% 50%;
}

.progress-circle circle.outer-ring {
    stroke: white;
    stroke-dasharray: 314;
    stroke-dashoffset: 314;
    animation: progressAnimation 2s forwards;
}

.progress-circle circle.inner-ring {
    stroke: white; /* Light gray from the gradient */
    stroke-dasharray: 314;
    stroke-dashoffset: 157; /* Example for 50% height */
    animation: progressAnimation 2s forwards;
}

@keyframes progressAnimation {
    to {
        stroke-dashoffset: 0;
    }
}

.info-card p {
    font-size: 1.1rem;
    margin: 10px 0;
    color: white; /* White text for readability */
}

.info-card p strong {
    font-size: 1.3rem;
    font-weight: 700;
}



                        </style>
                    </head>
                    <body>
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
                                        <a href="Center.php">Privacy Center</a>
                                        <a href="Support.php">Support</a>
                                        <a href="HomePage.php" onclick = "preventBack()">Logout</a>
                                    </div>
                                </div>
                            </ul>
                        </nav>
                    
                        <div id = "container">
                        <div class = "containerButtons">
                        <button class = "userGoals" onclick = "changer2()">Stats</button>
                        <button class = "userActivities" onclick = "changer1()">Activity</button>
                        </div>
                        <div class = "performActivity">
                      <form id="activityInputs" method="POST" action="backend3.php" target="hiddenFrame1" onsubmit="return handleForm()">
                        <label>Activity name</label>
                        <input type = "text" name = "workoutName" id = "workoutName" required>
                        <label>Date</label>
                        <input type = "date" name = "performedDate" id = "performedDate" required>
                        <label>Activity</label>
  <select onchange="handleSelection(event)" name = activityName id = "activityType" required>
  <option value = "Select An Activity"selected disabled>Select An Activity</option> 
  <option value="gymWorkout">Gym Workout</option>
    <option value="bikeRide">Bike Ride</option>
    <option value="walk">Walk</option>
    <option value="hike">Hike</option>
    <option value="run">Run</option>
</select>

                    <label>Duration</label>
                    <input type = "number" class = "nums" name = "TotalDuration" id = "TotalDuration" placeholder = "mins">
                    <div id = "cardioWork">
                    <label>Distance (mi)</label>
                    <input type = "number" class = "nums" id ="distance">
                    <label>Pace (avg)</label>
                    <input type = "number" id = "pace">
                    </div>
                    <label>Calories Burned(kcal)</label>
                    <input type = "number" name ="caloriesBurned"  style = "margin-top:2%; font-size:20px; width:50%;margin-left:24%;"readonly id = "caloriesBurned" required>
                    <button onclick = "calculateCalories(event)">CALCULATE</button>
                    <label>Notes</label>
                    <textarea id ="note" rows ="4" cols = "42" name = "note" required></textarea>
                    <button style="margin-top:10px;">SAVE</button>    
                   <input type="text" name="userEmail" value="' . htmlspecialchars($userEmail) . '" style = "display:none;">  
                   </form>
                    </div>
                    <div class = "activityHistory">
                    <p class = "specialP">User Activity Tracker</p>
                     <div class="main-body">
        <div class="grid-wrapper">
            <div class="info-card">
                <h2>Body Info</h2>
                <div class="progress-circle">
                    <svg>
                        <circle class="outer-ring" cx="60" cy="60" r="50"></circle>
                        <circle class="inner-ring" cx="60" cy="60" r="50"></circle>
                    </svg>
                </div>
                <p>Weight: <strong id = "putWeight">0:0 kg</strong></p>
                <p>Height: <strong id = "putHeight">0</strong></p>
            </div>
            <div class="info-card">
                <h2>Workout Stats</h2>
                <p>Total Workouts: <strong id = "putWorkout">0</strong></p>
                <p>Calories Burned: <strong id = "totalCalories">0kcal</strong></p>
            </div>
        </div>
    </div>
                   <p class = "specialP2">Your Activities</p>
      
    <div class = "cardBody">
                    <table id = "activityTable">
                    <thead>
                    <tr><th>Activity Name</th>
                    <th>Activity Type</th>
                    <th>Email</th>
                    <th>PerformedDate</th>
                    <th>Calories Burned</th>
                    <th>Notes</th>
                    </tr>
                    </thead>
                    <tbody>
              
                    </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
                        
                    <iframe name="hiddenFrame1" style="display:none;"></iframe>                       
                        <script>
                   
                
 function activityValidation() {
    let workoutName = document.getElementById("workoutName").value.trim();
    let workoutDate = document.getElementById("performedDate").value.trim();
    let activityType = document.getElementById("activityType").value.trim();
    let duration = parseInt(document.getElementById("TotalDuration").value.trim());
   let distance = parseFloat(document.getElementById("distance").value.trim());
let pace = parseFloat(document.getElementById("pace").value.trim());

    let note = document.getElementById("note").value.trim();
    if(activityType ==="gymWorkout"){
 if (!workoutName || !workoutDate || !activityType || !duration  || !note) {
        alert("Please fill all the required fields.");
        return false; // Prevent form submission
    }
    if (isNaN(duration) || duration <= 0) {
        alert("Duration must be a positive number.");
        return false;
    }
        return true;    
                }

    // Check if any field is empty
    console.log(workoutName);
    console.log(workoutDate);
    console.log(activityType);
    console.log(duration);
    console.log(distance);
    console.log(pace);
    console.log(note);
    
    if (!workoutName || !workoutDate || !activityType || !duration || !distance || !pace || !note) {
        alert("Please fill all the required fields.");
        return false; // Prevent form submission
    }

    // Additional Validation Example (Optional)
    if (isNaN(duration) || duration <= 0) {
        alert("Duration must be a positive number.");
        return false;
    }
if (isNaN(pace) || pace < 0) {
    alert("Please enter a valid pace.");
    return false;
}
    if (isNaN(distance) || distance < 0) {
        alert("Distance must be a non-negative number.");
        return false;
    }

    // If everything is valid, allow the form to submit
    
    return true;
}
    function handleForm(){
    if (!activityValidation()) {
            return false; // Stop form submission if validation fails
        }

        // If validation passes, reload the page after a short delay
        setTimeout(() => {
            window.location.reload(); // Reload the page after 500ms
        }, 500);

        return true; // Allow the form submission
    
    }

                   function handleSelection(event) {
    const selectedValue = event.target.value;
    console.log(selectedValue);
    if (selectedValue === "gymWorkout") {
        document.getElementById("cardioWork").style.display = "none";
    } else {
        document.getElementById("cardioWork").style.display = "block";
    }
}
                        

function calculateCalories(event){        
event.preventDefault()      
let workout = 6;
        let hiking = 7;
        let bikeRide = 8;
        let walk = 3.5;
        let run = 9.8;
    let activityType =  document.getElementById("activityType").value;
  
    let duration = document.getElementById("TotalDuration").value;
    duration = duration/60; 
    if(activityType ==="gymWorkout"){
    
    const result = duration * workout * ("'.$userWeight.'") * 3.5 /200;
                    document.getElementById("caloriesBurned").value = result.toFixed(2);
                }
    else if (activityType === "bikeRide"){
            const result = duration * bikeRide * ("'.$userWeight.'")*3.5/200;
                    document.getElementById("caloriesBurned").value = result.toFixed(2);
                }
            else if (activityType === "walk"){
            const result = duration * walk * ("'.$userWeight.'")*3.5/200;
                   document.getElementById("caloriesBurned").value = result.toFixed(2);
             
            }
            else if (activityType === "run"){
                    const result = duration * run * ("'.$userWeight.'")*3.5/200;
                           document.getElementById("caloriesBurned").value = result.toFixed(2);
             
                }
            else if (activityType == "hike"){
                       const result = duration * hiking * ("'.$userWeight.'")*3.5/200;
                           document.getElementById("caloriesBurned").value = result.toFixed(2);
                }
                }
function preventBack(){
setTimeout(function() {
        window.history.pushState(null, null, window.location.href); // Push current state to prevent back
        window.onpopstate = function() {
            window.history.go(1); // Keeps user from going back to the previous page
        };
    }, 0);

}
function changer1() {
    let clickBtn = document.getElementsByClassName("userGoals");
    clickBtn[0].style.border = "none";

    let clickBtn2 = document.getElementsByClassName("userActivities");
    clickBtn2[0].style.borderBottom = "8px solid red";

    const activityHistory = document.getElementsByClassName("activityHistory")[0];
    activityHistory.style.visibility = "hidden";
    activityHistory.style.opacity = "0";

    const performActivity = document.getElementsByClassName("performActivity")[0];
    performActivity.style.visibility = "visible";
    performActivity.style.opacity = "1";
    document.getElementById("container").style.height = "1024px";
}

function changer2() {
    let clickBtn = document.getElementsByClassName("userActivities");
    clickBtn[0].style.border = "none";

    let clickBtn2 = document.getElementsByClassName("userGoals");
    clickBtn2[0].style.borderBottom = "8px solid red";
    clickBtn2[0].style.width = "13%";

    const performActivity = document.getElementsByClassName("performActivity")[0];
    performActivity.style.visibility = "hidden";
    performActivity.style.opacity = "0";

    const activityHistory = document.getElementsByClassName("activityHistory")[0];
    activityHistory.style.visibility = "visible";
    activityHistory.style.opacity = "1";
        document.getElementById("container").style.height = "800px";
        document.getElementById("container").style.overflow = "scroll";
        
}

                    </script>
                    </body>
                    </html>';
                    $tempQuery = "SELECT SUM(caloriesBurned) 
              FROM activity_log 
              WHERE email = '" . $userEmail . "'";
                if(mysqli_query($conn,$tempQuery)){
                    $result = mysqli_query($conn, $tempQuery);

                    // Fetch the sum of calories
                    $row = mysqli_fetch_assoc($result);
                    $totalCalories = intval($row['SUM(caloriesBurned)']);
                    
                    // Now pass it to JavaScript
                    echo '<script>
                  document.getElementById("totalCalories").innerText = "' . $totalCalories . ' kcal";
  </script>';
                }
                $tempQuery = "SELECT COUNT(ActivityType) AS totalWorkouts
                FROM activity_log
                WHERE email = '".$userEmail."' AND ActivityType = 'gymWorkout'";
  $result = mysqli_query($conn, $tempQuery);
  if ($result) {
      $row = mysqli_fetch_assoc($result);
      $totalWorkouts = intval($row['totalWorkouts']);
      echo '<script>
      document.getElementById("putWorkout").innerText = "'.$totalWorkouts.'"
      </script>';
  }
  $tempQuery = "SELECT weightInKilo, weightInGrams,heightInFt,heightInInch
  FROM register
  WHERE userEmail = '".$userEmail."'";
if(mysqli_query($conn,$tempQuery)){
    $result = mysqli_query($conn,$tempQuery);
    $row = mysqli_fetch_assoc($result);
    $weightInKilo = intval($row['weightInKilo']);
    $weightInGrams = intval($row['weightInGrams']);
    $heightInFt = intval($row['heightInFt']);
    $heightInInch = intval($row['heightInInch']);
    echo '<script>
    document.getElementById("putWeight").innerText = "'.$weightInKilo.':'.$weightInGrams.' kg";
    document.getElementById("putHeight").innerText = "'.$heightInFt.' ft '.$heightInInch.' in";
    </script>';

  }
  
                    $tempQuery = "SHOW TABLES LIKE 'activity_log'";
                    $tempResult = mysqli_query($conn, $tempQuery);
                        $tempQuery = "SELECT * FROM activity_log WHERE email = '$userEmail'";
                        if ($result = mysqli_query($conn, $tempQuery)) {
                            // Start the script block
                            echo '<script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    const newTable = document.getElementById("activityTable").querySelector("tbody");
                            ';
                        
                            while ($row = mysqli_fetch_assoc($result)) {
                                $activityName = htmlspecialchars($row["activityName"]);
                                $activityType = htmlspecialchars($row["ActivityType"]);
                                $tempEmail = htmlspecialchars($row["email"]);
                                $performedDate = htmlspecialchars($row["performedDate"]);
                                $caloriesBurned = htmlspecialchars($row["caloriesBurned"]);
                                $notes = htmlspecialchars($row["Notes"]);
                        
                                // Append each row to the script
                                echo '
                                    {
                                        const row = document.createElement("tr");
                                        row.innerHTML = `
                                            <td>' . $activityName . '</td>
                                            <td>' . $activityType . '</td>
                                            <td>' . $tempEmail . '</td>
                                            <td>' . $performedDate . '</td>
                                            <td>' . $caloriesBurned . '</td>
                                            <td>' . $notes . '</td>
                                        `;
                                        newTable.appendChild(row);
                                    }
                                ';
                            }
                        
                            // Close the script tag
                            echo '
                                });
                                document.getElementById("activityInputs").reset();
                            </script>';
                        
                            // Footer section (outside of the script)
                            
                        }

                        echo '
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
                            </div>';
                                            
                }
                else{
                    die("Password Is Incorrect".mysqli_error($conn));
                }
            }
            else{
            die("Email Not Found : ".mysqli_error($conn));
            }
        }
        else{
            die("Not Exectued Due To: ".mysqli_error($conn));
        }
    }
}
else{
    die("connnect failed due to".mysqli_error($conn));
}
?>
