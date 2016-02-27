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
	<body>
		<?php
			include("navbar.php");
		?>
		<div class="container-fluid">
			<div class="row" style="margin-top:20px;">
				<div class="col-md-2 sidebar">
					<img src="icons/admin.png" style="height:155px; margin-bottom:15px;">
					<span class="admin"><a href="admin.php" style="color:#0a4fb0;">Administração</a></span><br><br>
					<span class="glyphicon glyphicon-menu-right"></span><a href="admin.php?opcao=listar" class="opcao">Listar</a><br>
					<span class="glyphicon glyphicon-menu-right"></span><a href="admin.php?opcao=login" class="opcao"><span class="glyphicon glyphicon-user"></span>Login</a>
				</div>
				<div class="col-md-10" style="padding: 20px 25px 0px 25px;">
											
					<?php 
						include("validCad.php");
						include("validDel.php");
						include("validAlt.php");
						
						if(isset($_GET['opcao'])){
							switch($_GET['opcao']){
								case 'listar':include('listar.php');break;
								case 'login':include('login.php');break;
							}
						}else{	
							include("listar.php"); 
						}
						
					?>
					
				</div>
			</div>
			
				<?php include("footer.php"); ?>
			
		</div>
	</body>
</html>
