<?php
session_start(); 
//echo session_id();
if (!empty($_POST)) {
    require __DIR__ . '/auth.php';
    $login = $_POST['login'];
    $password = $_POST['password'];

    if (checkPassword($login, $password)) {
            setcookie('login', $login, 0, '/');
            // setcookie('password', $password, 0, '/');
            header('Location:/Skill_php/new_spa/person.php');
    }
    else {
        $error = 'Error!';
    }
}
?> 

<!DOCTYPE html>
<html>
<head>
<title>registrationform</title>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="styles.css" title="tyylit" />
</head>
<body>
    <div class="myweb">
        <div class="header1">
            <div class="otsikko1">Enjoy the best quality</div>
            <div class="otsikko2">My Spa Salon</div>
        </div>
    <div class="box">
        <h3>Sing in ... </br>and enjoy your personal discounts</h3>
        <?php 
        if (isset($error)): ?>
            <span style="color: rgb(45 142 255);">
            <?= $error ?>
            </span>
        <?php endif; ?>
        <form action="login.php" method="post">
            <input class="input" name="login" type="text" placeholder="Login"></br></br>
            <input class="input" name="password" type="password" placeholder="Password"></br></br>
            <input class="input" name="submit" type="submit" value="--- Sing in ---"></br></br>
        </form>
        </div>
    </div>	
</body>
</html>	


