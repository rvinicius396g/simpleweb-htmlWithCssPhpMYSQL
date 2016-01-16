<?php 
	if(isset($_POST['btnExcl'])){
		include('dbcon.php');
		
		$codigo = $_POST['codigo'];
		
		$conexao->query("DELETE FROM toys WHERE codigo='$codigo'");
	}
?>
