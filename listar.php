<head>
	<style>
		th{
			background-color:#c92864;
			color:#ffffff;
		}
		th,td{
			padding:5px;
		}
	</style>
</head>

<form role="form" class="form-inline" method="post" action="admin.php?opcao=listar" style="margin-bottom:20px;">
	<input class="form-control" style="width:300px;" type="text" name="palavra" placeholder="O que você procura?" required="required">
	<input class="btn btn-info" type="submit" name="btnSch" value="Buscar">
</form>

<table class="table-bordered table-striped">
	
<?php
//Barra de Busca
	if(isset($_POST['btnSch'])){
		if(empty($_POST['palavra'])){
			echo "Por favor preencha o campo de busca!";
		}else{
			include('dbcon.php');

			$palavra = $_POST['palavra'];
			
			
				$res = $conexao->query("SELECT * FROM toystore.toys WHERE nome LIKE '%$palavra%' ");
			
			
			$count = mysqli_num_rows($res);
			
			if($count > 0){
				while($linha = mysqli_fetch_array($res)){ 
					
?>				
			<div class="col-md-4 text-center" style="height:280px;">
				<img src="<?php echo "img/".$linha['imagem'];?>" style="height:170px;">
				<p><?php echo $linha['descricao'];?></p>
				<p><?php echo "R$".$linha['preco'];?></p>
				<a href="admin.php?opcao=alterar&codigo=<?php echo $linha["codigo"];?>">Alterar </a>
				<a href="admin.php?opcao=excluir&codigo=<?php echo $linha["codigo"];?>"> Excluir</a>
			</div>	
<?php
				}	
			}else{
				echo "Produto não encontrado";
			}
		}
	}else{
?>
		<h3 style="color:#ce2061;">Produtos Cadastrados</h3>
		<hr>
		<table class="table table-bordered">
			<tr>
				<th></th>
			</tr>
		</table>
	<?php 
	//Função LISTAR
		include('dbcon.php');
		
		$res = $conexao->query("SELECT codigo,nome,marca,categoria,preco FROM toys");
		
		while($linha = $res->fetch_assoc()){ 
	?>		<tr>
				<td><?php echo $linha['codigo'];?></td>
				<td><?php echo $linha['nome'];?></td>
				<td><?php echo $linha['marca'];?></td>
				<td><?php echo $linha['categoria'];?></td>
				<td><?php echo "R$ ".$linha['preco'];?></td>
			</tr>
<?php
		}
?>		
		<a href="admin.php?opcao=cadastrar" role="button" class="btn btn-info" style="margin-bottom:15px; margin-right:20px;">Cadastrar Novo</a>
<?php
		if(isset($_POST['btnAlt'])){
			echo "<span style='font-size:18px;'>* Dados alterados com sucesso!</span>";
		}
		if(isset($_POST['btnExcl'])){
			echo "@ Dados excluídos!";
		}
		if(isset($_POST['btnCad'])){
			echo "@ Dados cadastrados com sucesso!";
		}
	}	
?>
</table>


	

