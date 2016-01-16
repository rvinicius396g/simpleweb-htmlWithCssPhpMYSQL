<?php
	//Validação Cadastro	
	if(isset($_POST["btnCad"])){
		include('dbcon.php');
				
		$nome = $_POST["nome"];
		$marca = $_POST["marca"];
		$categoria = $_POST["categoria"];
		$preco = $_POST["preco"];
		$descricao = $_POST["descricao"];
		$detalhe = $_POST["detalhe"];
		$img = $_POST["imgurl"];
		
		$conexao->query("INSERT INTO toys(nome,marca,categoria,preco,descricao,detalhe,imagem) VALUES ('$nome','$marca','$categoria','$preco','$descricao','$detalhe','$img')");
	}
?>