<?php
	if(isset($_GET['toy'])){
		if($_GET['toy'] != null){
			include("detalhe.php");
		}
	}else{
		if(isset($_GET['for'])){
			
			include('dbcon.php');
			$for = $_GET['for'];
			
			$res = $conexao->query("SELECT * FROM toys WHERE publico='$for'");
			
			while($linha = mysqli_fetch_array($res)){
				$parcela = $linha['preco']/4; 
				$parcela = number_format($parcela,2,',','');
				?>
				
				<a href="category.php?for=<?php echo $for;?>&toy=<?php echo $linha['codigo'];?>"><div class="col-md-4" style="height:330px;">
					<img src="<?php echo "img/".$linha['imagem'];?>" style="height:170px;">
					<p style="font-size:16px; font-weight:bold; color:#2265c3;"><?php echo $linha['descricao'];?></p>
					<img src="icons/stars.png" style="width:100px; margin-bottom:7px;">
					<p style="margin-bottom:0px; font-size:18px; color:#8514a3;"><?php echo "R$".$linha['preco'];?></p>
					<p style="font-size:12px;"><?php echo "4x de R$".$parcela." sem juros"?></p>
				</div></a>
				
			<?php }
		}
		if(isset($_GET['cat'])){
			
			include('dbcon.php');
			$cat = $_GET['cat'];
			
			$res = $conexao->query("SELECT * FROM toys WHERE categoria='$cat'");
			
			while($linha = mysqli_fetch_array($res)){
				$parcela = $linha['preco']/4; 
				$parcela = number_format($parcela,2,',','');
				?>
				
				<a href="category.php?cat=<?php echo $cat;?>&toy=<?php echo $linha['codigo'];?>"><div class="col-md-4" style="height:330px;">
					<img src="<?php echo "img/".$linha['imagem'];?>" style="height:170px;">
					<p style="font-size:16px; font-weight:bold; color:#2265c3;"><?php echo $linha['descricao'];?></p>
					<img src="icons/stars.png" style="width:100px; margin-bottom:7px;">
					<p style="margin-bottom:0px; font-size:18px; color:#8514a3;"><?php echo "R$".$linha['preco'];?></p>
					<p style="font-size:12px;"><?php echo "4x de R$".$parcela." sem juros"?></p>
				</div></a>
				
			<?php }
		}
	}
?>