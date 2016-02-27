<head>
		<title>TimTimToys</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<style type="text/css">
			th{
				background-color:#c92864;
				color:#ffffff;
			}
			th,td{
				padding:5px;
			}
			footer{margin-top:20px;}
			
			footer img{margin:10px 20px 0px 20px; height:60px; float:left;}
			
			footer p{font-size:15px;	color:#ffffff;}
			
			.sidebar{padding:20px 0px 0px 10px; height:100%; border-right:1px solid #4c8af6; border-bottom:1px solid #4c8af6; background-color:#eeeeee;}
			
			.admin{font-size:23px; font-weight:bold; font-family:'Comic Sans MS';}
			
			.opcao{margin-left:12px; font-size:17px; color:#4c8af6;}
			
			/*.televendas{font-size:21px; color:#ffffff; font-weight:bold;}*/
			
			/*.tele-numero{font-size:24px; color:#1448ff; font-weight:bold;}*/
			
			.opmenu{font-size:16px; font-weight:bold;}
		
			.navbar-default{border-bottom:2px solid; border-color:#5001d8; border-radius:0px; background-color:#6199fd;}
		
			.navbar-nav{font-size:16px; font-family:'Comic Sans MS';}
			
			
		</style>
	</head>
<?php
	if(isset($_GET['codigo'])){
		//conexao
		include("dbcon.php");
		
		//pegando o codigo
		$codigo=$_GET['codigo'];
		
		//Consulta no banco
		$res=$conexao->query("SELECT * FROM toys WHERE codigo='$codigo'");
		$linha = $res->fetch_assoc(); 

		$nome = $linha['nome'];
		$marca = $linha['marca'];
		$categoria = $linha['categoria'];
		$preco = $linha['preco'];
		$descricao = $linha['descricao'];
		$detalhe = $linha['detalhe'];
		$imagem = $linha['imagem'];
	}
?>
<h3 style="color:#ce2061;">Excluir Produto</h3>
<hr>
<form action="admin.php" method="post" role="form">
	
	<label>Codigo:</label><br>
	<input class="form-control input-sm" type="number" name="codigo" value="<?php echo $codigo;?>" readonly="readonly" style="width:200px;">
	<label>Nome:</label>
	<input class="form-control input-sm" type="text" name="nome" value="<?php echo $nome;?>" readonly="readonly" style="width:300px;">
	<label>Marca:</label>
	<input class="form-control input-sm" type="text" name="marca" value="<?php echo $marca;?>" readonly="readonly" style="width:200px;">
	<label>Categoria:</label>
	<input class="form-control input-sm" type="text" name="categoria" value="<?php echo $categoria;?>" readonly="readonly" style="width:200px;">
	<label>Preço:</label>
	<input class="form-control input-sm" type="text" name="preco" value="<?php echo $preco;?>" readonly="readonly" style="width:200px;">
	<label>Descrição (max. 120 caracteres):</label>
	<input class="form-control input-sm" type="text" name="descricao" value="<?php echo $descricao;?>" maxlength="50" readonly="readonly" style="width:300px;">
	<label>Imagem (URL):</label>
	<input class="form-control input-sm" type="text" name="imgurl" value="<?php echo $imagem;?>" readonly="readonly" style="width:200px;"><br>
	<textarea class="form-control" rows="6" type="text" name="detalhe" readonly="readonly" style="width:400px;"><?php echo $detalhe;?></textarea><br>
	
	<input class="btn btn-warning" type="submit" name="btnExcl" value="Excluir">
	<a href="admin.php?opcao=listar" class="btn btn-default">Cancelar</a>
</form>
