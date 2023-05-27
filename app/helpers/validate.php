<?php
    if(empty($_POST['fullName']) || strlen($_POST['fullName']) < 3) {
        $emptyFullName =  '<a href = "../../public/index.php" class="btnSubmit">CORRIJA SEU NOME NO FORMULÁRIO</a>';  
    }elseif(empty($_POST['email'])  || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $emptyEmail =  '<a href = "../../public/index.php" class="btnSubmit">CORRIJA SEU E-MAIL NO FORMULÁRIO</a>';
    }elseif(empty($_POST['telNumber'])) {
        $emptyTelNumber =  '<a href = "../../public/index.php" class="btnSubmit">CORRIJA SEU TELEFONE NO FORMULÁRIO</a>'; 
    }elseif(empty($_POST['jobTitle'])) {
        $emptyEmail =  '<a href = "../../public/index.php" class="btnSubmit">CORRIJA SEU TRABALHO NO FORMULÁRIO</a>';
    }elseif(empty($_POST['country'])) {
        $emptyEmail =  '<a href = "../../public/index.php" class="btnSubmit">CORRIJA SEU PAIS NO FORMULÁRIO</a>'; 
    }else{
        echo "Tudo certinho";
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/assets/css/global.css">
    <link rel="stylesheet" href="../../public/assets/css/oppss.css">
    <title>OPPS...</title>
</head>
<body>
    <section class="containerButtonValidate">
        <img src="../../public/assets/images/triangle.png" alt="">
        <?php 
        if (isset($emptyFullName)) {
            echo $emptyFullName;
        }elseif(isset($emptyEmail)){
            echo $emptyEmail;
        }elseif(isset($emptyTelNumber)){
            echo $emptyTelNumber;
        }elseif(isset($emptyJob)){
            echo $emptyJob;
        }elseif(isset($emptyCountry)){
            echo $emptyCountry;
        }elseif(empty($emptyFullName) && empty($emptyTelNumber) && empty($emptyJob) && $emptyCountry){
            
        }
        
        ?>
    </section>
</body>
</html>
