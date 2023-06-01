<?php

$host = "localhost";
$bdName = "triangulejobs";
$user = "root";
$pass = "";

$mysqli = new mysqli($host, $user, $pass, $bdName);
if($mysqli->connect_errno){
    echo "Falha na conexão: (". $mysqli->connect_errno . ")" . $mysqli->connect_error;
}

?>