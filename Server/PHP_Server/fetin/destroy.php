<?php

      //Inicia a sessão

      session_start();

      //Elimina os dados da sessão

      //session_unregister($_SESSION['id']);

        //Encerra a sessão

      session_destroy();

      header("Location:login.php");
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=login.php'>";
      
?>