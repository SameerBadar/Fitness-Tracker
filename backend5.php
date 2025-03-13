<?php
$serverName = 'localhost';
$userName = 'root';
$hostPass = '';
$dbName = 'activepulse';
$conn = mysqli_connect($serverName, $userName, $hostPass, $dbName);

if ($conn) {
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$userEmail = $_POST['userEmail'];
$password = $_POST['password'];
$birthDate = $_POST['birthDate'];
$weightNumber = $_POST['weightNumber'];
$gramsNumber = $_POST['gramsNumber'];
$heightNumber = $_POST['heightNumber'];
$inchesNumber = $_POST['inchesNumber'];    
    

// MySQL query to update the activity_log table
$sql = "UPDATE register 
        SET firstName = '$firstName', 
            lastName = '$lastName', 
            userEmail = '$userEmail', 
            userPass = '$password', 
            birthDate = '$birthDate', 
            weightInKilo = '$weightNumber', 
            weightInGrams = '$gramsNumber', 
            heightInFt = '$heightNumber', 
            heightInInch = '$inchesNumber'
        WHERE userEmail = '$userEmail'"; // You can update using userEmail or any unique identifier

// Execute query
if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Loging Out")
    window.location.href = "Login.php";
    </script>';
} else {
    echo "Error: " . mysqli_error($conn);
}

}
?>