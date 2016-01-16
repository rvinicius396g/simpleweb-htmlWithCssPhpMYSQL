<?php 
	if(isset($_POST['btnAlt'])){
		include('dbcon.php');
		
		$codigo = $_POST["codigo"];
		$nome = $_POST["nome"];
		$marca = $_POST["marca"];
		$categoria = $_POST["categoria"];
		$preco = $_POST["preco"];
		$descricao = $_POST["descricao"];
		$img = $_POST["imgurl"];
		$detalhe = $_POST["detalhe"];
		
		$conexao->query("UPDATE toys SET nome='$nome',marca='$marca',categoria='$categoria',preco='$preco',descricao='$descricao',imagem='$img',detalhe='$detalhe' WHERE codigo='$codigo'");
	}
?>
