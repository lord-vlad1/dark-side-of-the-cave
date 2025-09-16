<!DOCTYPE html>
<html>
	
	<?php
		
		include_once "head.php";
	
	?>
	
	<body>
	
	<?php include_once "header.php"; ?>
		
		<div class="container-menu-body">
		
			<?php include_once "menu.php"; ?>
			
			<div class="container-body">
			
				<div class="container-branco">
					
					<div class="cabecalho">
					
						<div class="titulo">Quem somos</div>
						
					</div>
					
					<?php
					
						if (!empty($_POST)) {
							$txt_quem_somos = $_POST['txt_quem_somos'];
							mysqli_query($link,"UPDATE t_quem_somos SET txt_quem_somos='$txt_quem_somos' WHERE id='1'");
										
							echo "<div class='sucess-alert'>Texto editado com sucesso!</div>";
						}
						
						$query_txt_quem_somos = mysqli_query($link,"SELECT * FROM t_quem_somos WHERE id = '1'");
						$txt_quem_somos = mysqli_fetch_assoc($query_txt_quem_somos);
						
						?>
						
						<form action="quem-somos.php" method="post">
				
							<textarea class="textarea-sobre" name="txt_quem_somos"><?php echo 	$txt_quem_somos['txt_quem_somos']; ?></textarea>
					
							<div class="form-footer">
							
								<input type="submit" class="botao-adicionar" value="Atualizar">
							
						</div>
					</form>
				</div>
				
				<?php 
				
					include_once "footer.php";
				
				?>
			
			</div>
			
		</div>
		
	</body>
			
</html>