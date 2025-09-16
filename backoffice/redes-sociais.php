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
					
						<div class="titulo">Redes sociais</div>
						
					</div>
					
					<?php
					if (!empty($_POST)) {
							$instagram = $_POST['instagram'];
							$facebook = $_POST['facebook'];
							$youtube = $_POST['youtube'];
							$skype = $_POST['skype'];
							mysqli_query($link,"UPDATE t_social SET instagram='$instagram', facebook='$facebook', youtube='$youtube', skype='$skype' WHERE id='1'");
										
							echo "<div class='sucess-alert'>Texto editado com sucesso!</div>";
						}
						
						$query_social = mysqli_query($link,"SELECT * FROM t_social WHERE id = '1'");
						$social = mysqli_fetch_array($query_social,MYSQLI_ASSOC);
						
					?>
						
					<form action="redes-sociais.php" method="post">
					
						<div class="txt-contactos">Instagram</div>
					
						<input type="text" class="textarea-contactos" name="instagram" value="<?php echo $social['instagram']; ?>">
							
						<div class="txt-contactos-email">Facebook</div>
					
						<input type="text" class="textarea-contactos" name="facebook" value="<?php echo $social['facebook']; ?>">
					
						<div class="txt-contactos-email">Youtube</div>
					
						<input type="text" class="textarea-contactos" name="youtube" value="<?php echo $social['youtube']; ?>">
					
						<div class="txt-contactos-email">Skype</div>
					
						<input type="text" class="textarea-contactos" name="skype" value="<?php echo $social['skype']; ?>">
				
							<div class="form-footer">
							
								<input type="submit" class="botao-adicionar" value="Atualizar">
							
							</div>
					
					</form>
				</div>
				<?php include_once "footer.php"; ?>
			
			</div>
			
		</div>
		
	</body>
			
</html> 