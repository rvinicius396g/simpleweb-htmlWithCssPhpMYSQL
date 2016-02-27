   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
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

      		$res = $conexao->query("SELECT * FROM toystore.user WHERE nome = '$nome' AND senha = '$senha' ");
      		$count = mysqli_num_rows($res);

      		if ($count != 0) {
      			?>

				<h3>Painel / DashBoard</h3>	
				<hr/>
				<table class="table-bordered table-striped">
					<tr>
						<th>Cod</th>
						<th>Nome</th>
						<th>Marca</th>
						<th>Categoria</th>
						<th>Preço</th>
						<th>Controles</th>
					</tr>
				
				</table>
      			<?php
      			$res = $conexao->query("SELECT codigo,nome,marca,categoria,preco FROM toys");
		
				while($linha = $res->fetch_assoc()){
				?>
				<tr>
					<td>1</td>
				</tr>

				<?php
				}
      		}else
      			echo "Senha/Nome está errado!";
      	}
      ?>
</div> <!-- /container -->