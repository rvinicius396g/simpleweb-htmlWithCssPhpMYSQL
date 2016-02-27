<?php
	header('Content-Type: text/html; charset=utf-8');

	//DEFINICAO DA CREDENCIAL PARA ACESSO AO SERVIDOR MYSQL
	
	$host ="localhost"; //host do servidor - localhost
	$user = "root"; //usuario do servidor - root
	$pass = ""; //senha do usuario
	$base = "toystore"; //nome do banco de dados - toystore
	
	//ESTABELECENDO CONEXAO COM O SERVIDOR MYSQL
	//O @ OCULTA A MENSAGEM DE ERRO DO PHP
	
	$conexao = @mysqli_connect($host,$user,$pass,$base);
	
	//SE HOUVER ERRO NA CONEXAO
	
	if(!$conexao){
		echo "Erro de conexão com o MYSQL <br>";
		echo "Erro: ".mysqli_connect_error();
		exit();
	}
	// Pra não ter problemas de acentuação
	mysqli_query($conexao,"SET NAMES 'utf8'");
	mysqli_query($conexao,'SET character_set_connection=utf8');
	mysqli_query($conexao,'SET character_set_client=utf8');
	mysqli_query($conexao,'SET character_set_results=utf8');


?>