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
			
			.cat{font-size:23px;font-weight:bold; font-family:'Comic Sans MS';}
			
			.link-cat{font-size:17px; margin-left:12px; color:#4c8af6;}
			
			.sidebar{height:700px; padding:20px 0px 0px 20px; background-color:#eeeeee; border-right:1px solid #4c8af6; border-bottom:1px solid #4c8af6;}
			
			.cat-img{width:80%; margin-bottom:20px;}
			
			.cat-name{font-size:22px; font-weight:bold; color:#ce2061;}
			
			.cat-qtd{color:#858785; font-size:15px;}
			
			.televendas{font-size:21px; color:#ffffff; font-weight:bold;}
			
			.tele-numero{font-size:24px; color:#1448ff; font-weight:bold;}
			
			.opmenu{font-size:16px; font-weight:bold;}
		
			.navbar-default{border-bottom:2px solid; border-color:#5001d8; border-radius:0px; background-color:#6199fd;}
		
			.navbar-nav{font-size:16px; font-family:'Comic Sans MS';}
			
			.btnCompra:hover{background-color:#6199fd; color:#ffffff;}
			
			.btnCompra{margin-right:20px; background-color:#6199fd; border-color:#6199fd	; font-size:22px; font-weight:bold; color:#ffffff;}
			
			.btnFrete{padding:4px; background-color:#d8d8d8; border-color:#d8d8d8; font-size:12px;}
			
		</style>
	</head>
	<body>
	<?php
		include("navbar.php");
	?>
		<div class="container-fluid">
			<div class="row" style="margin-top:20px;">
				<div class="col-md-2 sidebar">
					<img src="img/kids.jpg" style="height:155px; margin-bottom:15px;">
					<span class="cat"><a href="category.php" style="color:#ce2061;">Categorias</a></span><br><br>
					<span class="glyphicon glyphicon-menu-right"></span><a href="category.php?cat=bonecas" class="link-cat">Bonecas</a><br>
					<span class="glyphicon glyphicon-menu-right"></span><a href="category.php?cat=pelucias" class="link-cat">Pelúcias</a><br>
					<span class="glyphicon glyphicon-menu-right"></span><a href="category.php?cat=eletronicos" class="link-cat">Eletrônicos</a><br>
					<span class="glyphicon glyphicon-menu-right"></span><a href="category.php?cat=jogos" class="link-cat">Jogos</a>
				</div>
				<div class="col-md-10 text-center" style="padding:30px 40px 0px 80px;">
					
					<?php
						if(isset($_GET['cat']) || (isset($_GET['for']))){
							include('produtos.php');
						}else{
							include("dbcon.php");
												
							$res1 = $conexao->query("SELECT * FROM toys WHERE categoria='Bonecas'");
							$bonecas = mysqli_num_rows($res1);
							$res2 = $conexao->query("SELECT * FROM toys WHERE categoria='Pelucias'");
							$pelucias = mysqli_num_rows($res2);
							$res3 = $conexao->query("SELECT * FROM toys WHERE categoria='Eletronicos'");
							$eletro = mysqli_num_rows($res3);
							$res4 = $conexao->query("SELECT * FROM toys WHERE categoria='Jogos'");
							$jogos = mysqli_num_rows($res4);
					?>
									
							<div class="row">
								<a href="category.php?cat=Bonecas"><div class="col-md-5" style="margin-right:50px;">
									<img src="img/bonecas.jpg" class="cat-img">
									<p><span class="cat-name">Bonecas </span><span class="cat-qtd">(Itens:<?php echo " ".$bonecas;?>)</span></p>
								</div></a>
								<a href="category.php?cat=Pelucias"><div class="col-md-5">
									<img src="img/pelucias.jpg" class="cat-img">
									<p><span class="cat-name">Pelúcias </span><span class="cat-qtd">(Itens:<?php echo " ".$pelucias;?>)</span></p>
								</div></a>
							</div>
							<div class="row">
								<a href="category.php?cat=Eletronicos"><div class="col-md-5" style="margin-right:50px;">
									<img src="img/eletronicos.jpg" class="cat-img">
									<p><span class="cat-name">Eletrônicos </span><span class="cat-qtd">(Itens:<?php echo " ".$eletro;?>)</span></p>
								</div></a>
								<a href="category.php?cat=Jogos"><div class="col-md-5">
									<img src="img/jogos.jpg" class="cat-img">
									<p><span class="cat-name">Jogos </span><span class="cat-qtd">(Itens:<?php echo " ".$jogos;?>)</span></p>
								</div></a>
							</div>
					<?php } ?>
					
				</div>
			</div>
			<footer class="row" style="padding:10px 15px 10px 15px; background-color:#6199fd;">
				<div style="float:left; width: 120px;">
					<span class="televendas">Televendas</span><br><span class="tele-numero">4002-8922</span>
				</div>
				<img src="icons/follow.png">
				<div style="margin:15px 0px 0px 450px;">
					<p>Unicid - Rua Cesário Galeno 448/475 Tatuapé - São Paulo - SP CEP 03071-000</p>
					<p>TimTimToys.com - Trabalho de Programação WEB - HTML, PHP, MySQL e Bootstrap</p>
				</div>
			</footer>
		</div>
	</body>
</html>