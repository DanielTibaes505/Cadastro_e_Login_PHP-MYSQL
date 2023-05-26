<?php

if(empty($_POST['fullName'])) {
    echo "Preencha o seu nome"; 
}else{
    echo $_POST['fullName'];
}



?>