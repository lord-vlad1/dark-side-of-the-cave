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
					
						<div class="titulo">Sobre o Jogo</div>
						
					</div>
					
					<?php
					
						if (!empty($_POST)) {
							$txt_sobre = $_POST['txt_sobre'];
							mysqli_query($link,"UPDATE t_sobre SET txt_sobre='$txt_sobre' WHERE id='1'");
										
							echo "<div class='sucess-alert'>Texto editado com sucesso!</div>";
						}
						
						$query_sobre = mysqli_query($link,"SELECT * FROM t_sobre WHERE id = '1'");
						$sobre = mysqli_fetch_array($query_sobre,MYSQLI_ASSOC);
						
						?>
					
					<form action="sobre.php" method="post">
				
						<textarea class="textarea-sobre" name="txt_sobre"><?php echo $sobre['txt_sobre']; ?></textarea>
					
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