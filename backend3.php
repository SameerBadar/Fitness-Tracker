<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $hostName = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'activepulse';
    $conn = mysqli_connect($hostName,$user,$password,$db);
    if($conn){
        $query = "SHOW TABLES LIKE 'activity_log'";
        $result = mysqli_query($conn, $query);
        //if table exists it returns 1 if it does not it returns 1
        if ($result && mysqli_num_rows($result) == 0) {
            // Table does not exist, so create it
            $query = "CREATE TABLE activity_log (
                email VARCHAR(50) NOT NULL,
                activityName VARCHAR(26) NOT NULL,
                performedDate DATE NOT NULL,
                ActivityType VARCHAR(12),
                caloriesBurned FLOAT NOT NULL,
                Notes VARCHAR(100) NOT NULL
            )";
        
            if (mysqli_query($conn, $query)) {
                echo '<script>alert("Table Successfully Created")</script>';
            } else {
                echo '<script>alert("Error creating table")</script>';
            }
        }  
            // Table exists, no need to create it
            $activityName = $_POST['workoutName'];
            $date = $_POST['performedDate'];
            $activityType = $_POST['activityName'];
            $calories = $_POST['caloriesBurned'];
            $userEmail = $_POST['userEmail'];
            $note = $_POST['note'];
            $query = "insert into activity_log values('$userEmail','$activityName'
            ,'$date','$activityType','$calories','$note')";
            if(mysqli_query($conn,$query)){
                echo'<script>alert("Data stored SucessFully")</script>';
                //redirecting
            }else{
                die("Error due to ".mysqli_error($conn));
            }
         
}
}
?>