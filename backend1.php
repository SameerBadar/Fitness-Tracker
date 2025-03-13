<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userEmail = $_POST['userEmail'];
    $password = $_POST['password'];
    $birthDate = $_POST['birthDate'];
    $gender = $_POST['userGender'];
    $weightNumber = $_POST['weightNumber'];
    $gramsNumber = $_POST['gramsNumber'];
    $heightNumber = $_POST['heightNumber'];
    $inchesNumber = $_POST['inchesNumber'];    
    $serverName = 'localhost';
    $userName ='root';
    $hostPass =''   ;
    $dbName = 'activepulse';
    $conn = mysqli_connect($serverName,$userName,$hostPass);
    if($conn){
        $sql = "SHOW DATABASES LIKE 'activepulse'";
        $result = mysqli_query($conn,$sql);
        if ($result && mysqli_num_rows($result) == 0){
    //create database
    $sql = "CREATE DATABASE $dbName";
    mysqli_query($conn,$sql);    
}
mysqli_select_db($conn,$dbName);
        //chec if table exists or not
        $sql = "SHOW TABLES LIKE 'register'";
      $result =  mysqli_query($conn,$sql);
      if(mysqli_num_rows($result) == 0){
        $sql = "CREATE TABLE register (
    firstName VARCHAR(20) NOT NULL,
    lastName VARCHAR(20) NOT NULL,
    userEmail VARCHAR(50) NOT NULL,
    userPass VARCHAR(255) NOT NULL,
    birthDate DATE NOT NULL,
    gender ENUM('Male', 'Female', 'Other') NOT NULL,
    weightInKilo INT(11) NOT NULL,
    weightInGrams INT(11) NOT NULL,
    heightInFt INT(11) NOT NULL,
    heightInInch INT(11) NOT NULL,
    PRIMARY KEY (userEmail)
)";
mysqli_query($conn,$sql);  
} 
      $sql = "insert into register values('$firstName','$lastName'
        ,'$userEmail','$password','$birthDate','$gender','$weightNumber','$gramsNumber'
        ,'$heightNumber','$inchesNumber')";
        if(mysqli_query($conn,$sql)){
            echo"<script>alert('Account SucessFullyCreated')</script>";
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
            }            
            echo"<script>window.location.href = 'Login.php'</script>";


        }
        else{
            die("Error".mysqli_error($conn));
        }
    }
    else{
        die("Not Connected".mysqli_error($conn));
    }
}

?>