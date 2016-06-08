<?php 
  require_once("verifica.php"); 

    echo "<meta HTTP-EQUIV='refresh' CONTENT='60;URL=index.php?link=2'>";
  

  //captura informacoes do bd
  mysql_connect('192.168.0.7','dba','dba123') or die (mysql_error());
  mysql_select_db('dcmsdb') or die (mysql_error());

  //busca no banco o conteudo pesquisado
  $rs = mysql_query("SELECT * FROM module") or die (mysql_error());
  $num = mysql_num_rows($rs) or die (mysql_error());

?>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
	<!--
	<div id="mainContent" style="text-align:left;">
		<form id="form1" name="form1" method="post" action="index.php?link=2">
			<div class="form-group" style="float:left;">
				| <a href="index.php?link=2" class="btn btn-lg">Novo Módulo</a> |
				<a href="index.php?link=3" class="btn  btn-lg">Alterar Módulo</a> |
				<a href="index.php?link=4" class="btn  btn-lg">Configurações</a> |
				<a href="index.php?link=5" class="btn  btn-lg">Alertas</a> |<br><hr>
			</div>
		</form>
	</div>
	-->

	<div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="widget">
           <div class="widget-body">
            <div class="metro-nav">

              <?php
                while($linha = mysql_fetch_array($rs)) 
                { ?>
                  <div class="metro-nav-block <?php echo $linha['statusmodule']; ?>">
                    <a href="<?php echo $linha['linkmodule']; ?>">
                      <i class="<?php echo $linha['iconmodule']; ?>"></i>
                      <div class="info"><?php echo $linha['infomodule']; ?></div>
                      <div class="brand"><?php echo $linha['nomemodule']; ?></div>
                    </a>
                  </div>
              <?php } 
                $sql = mysql_query("UPDATE `dcmsdb`.`module` SET `infomodule`='Offline', `statusmodule`='nav-block-red', `stat`='0' WHERE `stat`='1';") or die (mysql_error());
                mysql_close();
              ?> 

           	</div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
