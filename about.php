<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>TimTimToys</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<style type="text/css">
			footer img{margin:10px 20px 0px 20px; height:60px; float:left;}
			
			footer p{font-size:15px;	color:#ffffff;}
			
			.sidebar{height:100%; padding:20px 0px 0px 20px; background-color:#eeeeee; border-right:1px solid #4c8af6; border-bottom:1px solid #4c8af6;}
			
			.televendas{font-size:21px; color:#ffffff; font-weight:bold;}
			
			.tele-numero{font-size:24px; color:#1448ff; font-weight:bold;}
			
			.cat{font-size:23px;font-weight:bold; font-family:'Comic Sans MS';}
			
			.link-cat{font-size:17px; margin-left:12px; color:#4c8af6;}
			
			.admin{font-size:23px; font-weight:bold; font-family:'Comic Sans MS';}
			
			.opcao{margin-left:12px; font-size:17px; color:#4c8af6;}
			
			.opmenu{font-size:16px; font-weight:bold;}
		
			.navbar-default{border-bottom:2px solid; border-color:#5001d8; border-radius:0px; background-color:#6199fd;}
		
			.navbar-nav{font-size:16px; font-family:'Comic Sans MS';}
		</style>
	</head>
	<body>
	<?php
		include("navbar.php");
	?>
		<div class="container-fluid">
			<div class="row" style="margin-top:20px;">
				<div class="col-md-2 sidebar">
					<span class="cat"><a href="category.php" style="color:#ce2061;">Categorias</a></span><br><br>
					<span class="glyphicon glyphicon-menu-right"></span><a href="category.php?cat=bonecas" class="link-cat">Bonecas</a><br>
					<span class="glyphicon glyphicon-menu-right"></span><a href="category.php?cat=pelucias" class="link-cat">Pelúcias</a><br>
					<span class="glyphicon glyphicon-menu-right"></span><a href="category.php?cat=eletronicos" class="link-cat">Eletrônicos</a><br>
					<span class="glyphicon glyphicon-menu-right"></span><a href="category.php?cat=jogos" class="link-cat">Jogos</a>
					</div>
				<div class="col-md-10 text-center" style="padding:30px 40px 0px 80px;">
					<h3 style="color:#ce2061;">Sobre o Site</h3>
					<hr>
				<?php 
					include('dbcon.php');
					
					$res = $conexao->query("SELECT * FROM about");
					
					while($linha = mysqli_fetch_array($res)){
				?>
							
							<div class="col-md-4" style="height:330px;">
								<img src="<?php echo "img/".$linha['imagem'];?>" style="height:170px;">
								<p style="font-size:16px; font-weight:bold; color:#2265c3;"><?php echo $linha['nome'];?></p>
								<p style="margin-bottom:0px; font-size:18px; color:#8514a3;"><?php echo $linha['rgm'];?></p>
							</div>
							
				<?php } ?>
				</div>	
		</div>
		<?php include("footer.php"); ?>
		<!-- footer-->
		</div>
	</body>
</html>