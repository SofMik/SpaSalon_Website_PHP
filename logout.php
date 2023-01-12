<?php
unset($_COOKIE['login']);
setcookie('login', null, -1, '/');
unset($_COOKIE['password']);
setcookie('password', null, -1, '/');
session_destroy(); 
header('Location:/Skill_php/new_spa/index.php');
?>