<!doctype html>
<html>
	<head>
		<title>Line Chart</title>
		<script src="js/Chart.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>

		<form role="form" action="index.php?link=7" method="post">
			<select name="selection" class="form-control" style="float:left;width:320px;margin-left:120px" >
			  <option value="1">Selecione...</option>
			  <option value="2">Última Hora</option>
			  <option value="3">Diário</option>
			  <option value="4">Semanal</option>
			  <option value="5">Mensal</option>
			  <option value="6">Anual</option>
			</select> |

			<input class="btn btn-primary" type="submit" style="text-align:left;margin-left:-200px" value="Exibir Gráfico" /> |
			<a href="index.php?link=4" class="btn  btn-danger ">Desativar Módulo</a> |
			<a href="index.php?link=5" class="btn  btn-success">Ativar Módulo</a> |
				
		</form>

		<?php
			if (!empty($_REQUEST) && isset($_REQUEST['selection'])) 
			{
		    	$graph = $_REQUEST['selection'];
			}
			
			$pag[1] = "login.php";
			$pag[2] = "graph_hour.php";
			$pag[3] = "graph_day.php";
			$pag[4] = "graph_week.php";
			$pag[5] = "graph_month.php";
			$pag[6] = "graph_year.php";
			
				
			if (!empty($graph))
			{
				if (file_exists($pag[$graph]))
				{
					include $pag[$graph];
				}
				/*else
				{
					include ('404.html'); //quando graph não encontrado
					//echo "<meta HTTP-EQUIV='Refresh' CONTENT='30;URL=index.php?graph=1'>";
				}
			}
			else
			{
				//include ('dados.php'); */
			} 

		?>
	</body>
</html>
