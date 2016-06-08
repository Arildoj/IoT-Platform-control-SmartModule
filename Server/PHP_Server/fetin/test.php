<?php

    $login = $_REQUEST['login'];
    $pwd = $_REQUEST['senha'];   

    $senha = sha1($pwd);
    echo "Login: " . $login;
    echo " e ";
    echo "Senha: " . $senha;
?>