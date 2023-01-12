<?php 

function checkPassword(string $login, string $password): bool
{
    $users = require __DIR__ . '/data.php';
  
        for($i = 0; $i < count($users); $i++) {
                $login_user = $users[$i]['login'];
                $password_user = $users[$i]['password'];
                $hash = password_hash($users[$i]['password'], PASSWORD_DEFAULT);
                        if (password_verify($password, $hash)) {
                                return true;
                        }
        }
return false;
}

function getCurrentUser()//: ?string
{
        $loginFromCookies = $_COOKIE['login'] ?? '';
        $passwordFromCookies = $_COOKIE['password'] ?? '';
                if (checkPassword($loginFromCookies, $passwordFromCookies)) {
                        return $loginFromCookies;
                        return $passwordFromCookies;
                }
return null;
}

?> 