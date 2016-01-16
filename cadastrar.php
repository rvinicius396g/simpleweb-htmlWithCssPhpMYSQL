<h3 style="color:#ce2061;">Cadastrar Produto</h3>
<hr>
<form action="admin.php" method="post" role="form">
	
	<label>Nome:</label>
	<input class="form-control input-sm" type="text" name="nome" style="width:300px;">
	<label>Marca:</label>
	<input class="form-control input-sm" type="text" name="marca" style="width:200px;">
	<label>Categoria:</label>
	<input class="form-control input-sm" type="text" name="categoria" style="width:200px;">
	<label>Preço:</label>
	<input class="form-control input-sm" type="text" name="preco" style="width:200px;">
	<label>Descrição (max. 50 caracteres):</label>
	<input class="form-control input-sm" type="text" name="descricao" maxlength="50" style="width:300px;">
	<label>Imagem (URL):</label>
	<input class="form-control input-sm" type="text" name="imgurl" style="width:200px;"><br>
	<textarea class="form-control" rows="6" type="text" name="detalhe" placeholder="Descreva aqui o seu produto..." style="width:400px;"></textarea><br>
	
	<input class="btn btn-info" type="submit" name="btnCad" value="Enviar">
	<a href="admin.php?opcao=listar" class="btn btn-default">Cancelar</a>
</form>
