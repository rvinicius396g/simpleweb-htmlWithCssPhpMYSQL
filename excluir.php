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
