<?php
  $quantity = [];
  $flag = -1;

if($_SERVER['REQUEST_METHOD'] =="POST" && isset($_POST['Catelog'])){
    if($_POST['appleQuantity']>0 && $_POST['bananaQuantity']>0){
        $quantity[0] = $_POST['appleQuantity'];
        $quantity[1] = $_POST['bananaQuantity'];    
        $flag = 2;
        //means both are there
    }
    else if($_POST['appleQuantity']>0){
        $quantity[0] = $_POST['appleQuantity'];
        $flag = 0; // means apple
    }
    else if($_POST['bananaQuantity']>0){
        $quantity[0] = $_POST['bananaQuantity'];
        $flag = 1; // means bananana
    }
    /*
    echo'<script>
    function increment(idName){
    if(idName == apple){
    let temp = ('".$quantity[0]."');
    temp++;
    '".$quantity[0]."' = temp;
}else{
   let temp = ('".$quantity[0]."');
    temp++;
    '".$quantity[1]."' = temp;
}
}
    </script>'
*/
    }
else if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['remove1'])){
    echo'<script>document.getElementById("data1").style.display = "none";</script>';
}
else if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['remove2'])){
    echo'<script>document.getElementById("data2").style.display = "none";</script>';
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST">
    <label>Apple</label>
    <input type = "number" name = "appleQuantity" required>
    <br>
    <label>Bananana</label>
    <input type = "number" name = "bananaQuantity" required>
    <br>
    <button name = "Catelog">Add to catelog</button>
    </form>
</body>
</html>
<h1>Category</h1>
<?php
if(sizeof($quantity) == 0){
    echo '<p>Your Shopping Cart is empty</p>';
}

else if (sizeof($quantity)==1){
    if($flag == 0){
        echo '<p>Apple : '.$quantity[0].' <button name = "remove">Remove</p>';
        echo"<br>";
    }
    else if($flag == 1){
        echo '<p>Banana : '.$quantity[0].' <button name = "remove">Remove</p>';
        echo"<br>";
        
    }
}
else if(sizeof($quantity)>1){
  echo'<form method = "POST">';
    echo'<div id = "data1">';
    echo "<p>Apple : ";
    echo $quantity[0];
    echo '<button name = "remove1" style = "margin-left:10px;">Remove</button>';
    echo'</div>';
    echo '<br>';
    echo'</form>';
    echo'<form method = "POST">';
    echo'<div id = "data2">';
    echo "<p>Bananna : ";
    echo $quantity[1];
    echo '<button name = "remove2" style = "margin-left:10px;">Remove</button>';
    echo '</div>';
    echo'</form>';
    /*
    echo '<p>Apple : '.$quantity[0].' <button name = "remove">Remove</p>';
        echo'<br>';

        echo '<p>Banana : '.$quantity[1].' <button name = "remove">Remove</p>';
        echo'<br>';
      */
}
?>