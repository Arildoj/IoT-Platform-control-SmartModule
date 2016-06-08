<?php require_once("verifica.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>FUTURE FARM - Fazenda inteligente</title>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/new.css" rel="stylesheet">
<link href="fonts/font-awesome.min.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/layout.css" /> 

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-40304444-1', 'iamsrinu.com');
      ga('send', 'pageview');

    </script>
    <!-- Main Container end -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.js"></script>

    <!-- Custom JS -->
    <script src="js/custom.js"></script>
    
    <script type="text/javascript">
      //ScrollUp
      $(function () {
        $.scrollUp({
          scrollName: 'scrollUp', // Element ID
          topDistance: '300', // Distance from top before showing element (px)
          topSpeed: 300, // Speed back to top (ms)
          animation: 'fade', // Fade, slide, none
          animationInSpeed: 400, // Animation in speed (ms)
          animationOutSpeed: 400, // Animation out speed (ms)
          scrollText: 'Scroll to top', // Text for element
          activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });
      });

      //Tooltip
      $('a').tooltip('hide');

      //Popover
      $('.popover-pop').popover('hide');

      //Dropdown
      $('.dropdown-toggle').dropdown();

    </script>

	<style type="text/css">
		body {
			background-color: #D8ECE0;
		}
		.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
		.style2 {font-family: Arial, Helvetica, sans-serif}
		.style3 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }

		body {
			font: 100% Verdana, Arial, Helvetica, sans-serif;
			background: #666666;
			margin: 0; /* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */
			padding: 0;
			text-align: center; /* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */
			color: #333;
			background-color: #FFF;
		}
		.oneColLiqCtrHdr #container {
			width: 80%;  /* this will create a container 80% of the browser width */
			background: #FFFFFF;
			margin: 0 auto; /* the auto margins (in conjunction with a width) center the page */
			border: 1px solid #000000;
			text-align: left; /* this overrides the text-align: center on the body element. */
		}
		.oneColLiqCtrHdr #header {
			background:#009;
			color:#FFF;
			padding: 0 10px 0 20px;  /* this padding matches the left alignment of the elements in the divs that appear beneath it. If an image is used in the #header instead of text, you may want to remove the padding. */
		}
		.oneColLiqCtrHdr #header h1 {
			margin: 0; /* zeroing the margin of the last element in the #header div will avoid margin collapse - an unexplainable space between divs. If the div has a border around it, this is not necessary as that also avoids the margin collapse */
			padding: 10px 0; /* using padding instead of margin will allow you to keep the element away from the edges of the div */
		}
		.oneColLiqCtrHdr #mainContent {
			padding: 0 20px; /* remember that padding is the space inside the div box and margin is the space outside the div box */
			background: #FFFFFF;
		}
		.oneColLiqCtrHdr #footer { 
			padding: 0 10px; /* this padding matches the left alignment of the elements in the divs that appear above it. */
			background:#009;
			color:#FFF;
		} 
		.oneColLiqCtrHdr #footer p {
			margin: 0; /* zeroing the margins of the first element in the footer will avoid the possibility of margin collapse - a space between divs */
			padding: 10px 0; /* padding on this element will create space, just as the the margin would have, without the margin collapse issue */
		}
	</style>
	<script language="JavaScript">
            
            function DataHora(){
            var data = new Date();
            tempo.innerHTML = data;
            setTimeout("DataHora()",1000)
            }
    </script>
	<?php
		echo "<meta HTTP-EQUIV='refresh' CONTENT='30;URL=index.php?link=2'>";
	?>
</head>

<body class="oneColLiqCtrHdr" onLoad="DataHora()">
	<div id="header" style="text-align:left;">
		<hr>
		<h3>FUTURE FARM - Sua fazenda mais inteligente</h3>
			<a href="index.php?link=6"><i class="fa fa-calendar"></i>
					<span class="date-range" id="tempo"></span></a>


		<hr>
	</div>

	<div id="mainContent" style="text-align:left;">
		<hr>
			<form id="form1" name="form1" method="post" action="index.php?link=2">
				 <div class="form-group" style="float:left;">
					| <a href="index.php?link=2" class="btn  btn-primary btn-xs">Módulos</a> |
					<a href="index.php?link=3" class="btn  btn-primary btn-xs">Relatórios</a> |
					<a href="index.php?link=4" class="btn  btn-primary btn-xs">Configurações</a> |
					<a href="index.php?link=5" class="btn  btn-primary btn-xs">Alertas</a> |
				</div>

				<div class="form-group" style="text-align:right;">
					<input class="input" type="text" name="pesq" id="pesq" placeholder="Digite algo para buscar..."/> | 
					
					<input class="fa fa-search" name="buscar" type="submit" id="btbuscar" value="" /> |
					<a href="destroy.php" class="btn  fa fa-sign-in"></a> |
				</div>
			</form>
		<hr>
	</div>


	<!--=============
	Todos os eventos ocorrem aqui
	==================-->


</body>
</html>
<?php 
	if (!empty($_REQUEST) && isset($_REQUEST['link'])) 
	{
    	$link = $_REQUEST['link'];
	}
	
	$pag[1] = "login.php";
	$pag[2] = "modulos.php";
	$pag[3] = "relatorios.php";
	$pag[4] = "configuracoes.php";
	$pag[5] = "alertas.php";
	$pag[6] = "calendar.php";
	$pag[7] = "controlwater.php";
			
		if (!empty($link))
		{
			if (file_exists($pag[$link]))
			{
				include $pag[$link];
			}
			else
			{
				include ('404.html'); //quando link não é encontrado
				echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php?link=1'>";
			}
		}
		else
		{
			//include ('dados.php');
		} 

		
?>
