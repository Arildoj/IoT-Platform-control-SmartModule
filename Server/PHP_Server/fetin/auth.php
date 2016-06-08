 <?php 
	
	//CAPTURA DADOS
    $login = $_REQUEST['login'];
    $pwd = $_REQUEST['senha'];   

    //criptografia da senha
    $senha = sha1($pwd);
    			
	//Captura data atual
	$data_atual = date('Y-m-d');
	
	//captura informacoes do bd
	mysql_connect('192.168.0.7','dba','dba123') or die (mysql_error());
	mysql_select_db('dcmsdb') or die (mysql_error());
	
	//busca no banco o conteudo pesquisado
	$pesquisa= "SELECT idusuarios FROM usuarios WHERE login = '$login' AND senha = '$senha'";
	$rs = mysql_query($pesquisa);
	$num = mysql_num_rows($rs);

    //Retornamos o numero de linhas afetadas
    //Verificams se alguma linha foi afetada, caso sim retornamos suas informa

	if($num > 0){
		$rst = mysql_fetch_array($rs); 
		$id = $rst['idusuarios'];
		//Inicia a sessao
		session_start();
		//Registra os dados do usurio na sesso  
        $_SESSION['id'] = $id;
		//Encerra a conexo com o banco
		mysql_close();
		//Redireciona para o index
		echo "<script>location.href='index.php?link=2'</script>";
		
    }      
    else {
		//Encerra a conexo com o banco
		mysql_close();
		//Caso nenhuma linha seja retornada emite o alerta e retorna^M
		echo "<b><h1>Nenhum usuario foi encontrado com os dados informados...retornando</h1></b>";      
        echo "<meta http-equiv='refresh' content='3;URL=index.php?link=1'>";
    } 
?>
