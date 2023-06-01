<?php
include('./connection.php');
$sql_code = "INSERT INTO users (fullName,email,tel,job,country,terms) VALUES ('$name','$email','$tel','$job','$country','$terms')";
$sendingData = $mysqli->query($sql_code) or die($mysqli->error);

if($sendingData){
    header('Location: ../../public/pages/load.html');
    
}
?>