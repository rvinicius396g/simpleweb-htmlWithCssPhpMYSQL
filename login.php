
 <div class="container">

      <form role="form" class="form-signin" method="post" action="admin.php?opcao=login">
        <h2 class="form-signin-heading">Faça o Login</h2>

        <label for="inputEmail" class="sr-only">Nome</label>
        	<input name="bnome" type="text" id="inputEmail" class="form-control" placeholder="Login" required autofocus>

        <label for="inputPassword" class="sr-only">Senha</label>
        	<input name="bsenha" type="password" id="inputPassword" class="form-control" placeholder="Senha" required>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        	<button class="btn btn-lg btn-primary btn-block" type="submit" name="btlogin">Login</button>
      </form>

      <?php 
      	if (isset( $_POST['btlogin'])) {
      		include("dbcon.php");
      		$nome = $_POST['bnome'];
      		$senha = $_POST['bsenha'];

      		$res = $conexao->query("SELECT * FROM user WHERE nome = '$nome' AND senha = '$senha' ");
      		$count = mysqli_num_rows($res);

      		if ($count != 0) {
      			?>
				<a href="admin.php?opcao=cadastrar" role="button" class="btn btn-info" style="margin-bottom:15px; margin-right:20px;">Cadastrar Novo</a>
				<h3>Painel / DashBoard</h3>	
				<hr/>
				<table class="table-bordered table-striped">
					<tr>
						<th>Cod</th>
						<th>Nome</th>
						<th>Marca</th>
						<th>Categoria</th>
						<th>Preço</th>
						<th colspan="2">Controles</th>
					</tr>
				
				
      			<?php
      			$res = $conexao->query("SELECT codigo,nome,marca,categoria,preco FROM toys");
		
				while($linha = $res->fetch_assoc()){
				?>
				<tr>
					<td><?php echo $linha['codigo'];?></td>
					<td><?php echo $linha['nome'];?></td>
					<td><?php echo $linha['marca'];?></td>
					<td><?php echo $linha['categoria'];?></td>
					<td><?php echo "R$ ".$linha['preco'];?></td>
					<td><a href="alterar.php?opcao=alterar&codigo=<?php echo $linha["codigo"];?>">Alterar</a></td>
					<td><a href="excluir.php?opcao=excluir&codigo=<?php echo $linha["codigo"];?>">Excluir</a></td>

				</tr>

				<?php
				}
				?>
				</table>
				<?php
      		}else
      			echo "Senha/Nome está errado!";
      	}
      ?>
</div> <!-- /container -->