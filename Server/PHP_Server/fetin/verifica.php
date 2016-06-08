<?php
    //Inicia a sessão
    session_start();
    //Verifica se há dados ativos na sessão
    if(empty($_SESSION["id"])){
    //Caso não exista dados registrados, exige login
	//echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=login.php'>";
    header("Location:login.php");
    }
?>