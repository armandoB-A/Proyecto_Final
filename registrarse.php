<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styleLog.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">

            <!-- Tabs Titles -->
            <a href="login.php"><h2 class="inactive"> Ingresar </h2></a>
            <h2 class="active underlineHover">Registrarse </h2>

            <!-- Icon -->
            <!--<div class="fadeIn first">
                <img src="icon.svg" id="icon" alt="User Icon" />
            </div>-->
            <!-- Login Form -->
            <form class="needs-validation" action="procesarLogin.php" method="post">
                <input type="text" id="login" class="fadeIn second" name="loginN" placeholder="login">
                <input type="text" id="login" class="fadeIn second" name="loginN" placeholder="login">
                <input type="text" id="login" class="fadeIn second" name="loginN" placeholder="login">
                <input type="text" id="login" class="fadeIn second" name="loginN" placeholder="login">
                <input type="text" id="login" class="fadeIn second" name="loginN" placeholder="login">
                <input type="text" id="login" class="fadeIn second" name="loginN" placeholder="login">
                <input type="text" id="login" class="fadeIn second" name="loginN" placeholder="login">
                <input type="text" id="login" class="fadeIn second" name="loginN" placeholder="login">
                <input type="text" id="password" class="fadeIn third" name="loginC" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Log In" name="Registrar">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Olvidaste tu contraseña?</a>
            </div>
        </div>
    </div>
</body>

</html>