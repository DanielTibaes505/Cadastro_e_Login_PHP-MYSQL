<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=w, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Cadastre</title>
</head>
<body>
    <section class="frameGlobal">
        <div class="frameLeft">
            <img src="./assets/images/triangle.png" alt="Triangle Image">
            <h1 class="titleFrameLeft">Add New Users</h1>
            <p class="txtFrameLeft">"Seja muito bem-vindo(a) ao Triangule Jobs, o seu portal para novas oportunidades de carreira!</p>
            <p class="txtFrameLeft">Aqui, você encontrará um universo de vagas aguardando por você. O Triangule Jobs é a plataforma perfeita para conectar talentos incríveis, como você, 
                às melhores empresas do mercado. Explore nossas vagas, atualize seu perfil, destaque suas habilidades e mostre todo o seu potencial.</p>
        </div>
        <div class="frameRight">
            <h1>User Registration</h1>
            <form action="../app/helpers/validate.php" method="POST">
                <input type="text"  name="fullName" class="inputFormData" id="fullNameTxt" placeholder="Full Name*" maxlength="140">
                <input type="email"  name="email" class="inputFormData" id="emailTxt" placeholder="E-mail*" maxlength="140">
                <input type="tel"  name="telNumber" class="inputFormData" id="telNumber" placeholder="Mobile Number*" maxlength="14">
                <input type="text"  name="jobTitle" class="inputFormData" id="jobTitleTxt" placeholder="Job Title*" maxlength="140">
                <input type="text"  name="country" class="inputFormData" id="countryTxt" placeholder="Country*" maxlength="140">
                <div class="options">
                    <input type="checkbox" required name="checkboxTerm" value="Termo_Aceito" id="checkboxTerm">
                    <p>Eu li e concordo com os termos de uso.</p>
                </div>
                <button type = "submit" name = "registration" class="btnSubmit" id="btnRegisterSubmit">Register</button>
            </form>
        </div>
    </section>
   
</body>
</html>