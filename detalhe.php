<?php
	if(isset($_GET['toy'])){
		include('dbcon.php');
		
		$toy = $_GET['toy'];
		
		$res = $conexao->query("SELECT * FROM toys WHERE codigo ='$toy'");
		
		$linha = mysqli_fetch_array($res);
		$parcela = $linha['preco']/4; 
		$parcela = number_format($parcela,2,',','');
		?>
			
			<div class="row">
				<div class="row text-justify">
					<p style="padding-left:25px;"><span style="font-size:26px; font-weight:bold; color:#2265c3;"><?php echo $linha['descricao'];?></span><span style="font-size:12px; color:#858785;"> (Código do produto:<?php echo " ".$linha['codigo'];?>)</span></p>
				</div>
				<div class="row">
					<div class="col-md-5" style="margin-top:25px;">
						<img src="img/<?php echo $linha['imagem'];?>">
					</div>
					<div class="col-md-7 text-justify" style="margin-top:25px;">
						<img src="icons/stars.png" style="width:220px; margin-bottom:15px;">
						<div style="padding:6px; border-radius:6px; width:230px; background-color:#e5e5e5;">
							<p style="font-size:30px; color:#8514a3;"><?php echo "R$".$linha['preco'];?></p>
							<p style="font-size:12px;"><?php echo "4x de R$".$parcela." sem juros"?></p>
						</div>
						<img src="icons/cartoes.png" style="margin-top:25px; width:230px;"><br><br>
						<div class="btn btn-default btnCompra">Comprar</div>
						<div class="btn btn-default btnFrete">Calcular Frete</div>
					</div>
				</div>	
			</div>
			<div class="row" style="width:800px; height:200px; margin-top: 30px; padding:20px; border-radius:6px; background-color: #e5e5e5;">
				<p class="text-justify" style="font-size:16px;"><?php echo $linha['detalhe'];?></p>
			</div>
		
		
<?php	}
?>