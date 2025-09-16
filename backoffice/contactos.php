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
					
						<div class="titulo">Contactos</div>
						
					</div>
					
					<?php
					
						if (!empty($_POST)) {
							$telefone = $_POST['telefone'];
							$email = $_POST['email'];
							mysqli_query($link,"UPDATE t_contactos SET telefone='$telefone', email='$email' WHERE id='1'");
										
							echo "<div class='sucess-alert'>Texto editado com sucesso!</div>";
						}
						
						$query_contactos = mysqli_query($link,"SELECT * FROM t_contactos WHERE id = '1'");
						$contactos = mysqli_fetch_array($query_contactos,MYSQLI_ASSOC);
						
						?>
					
					
					<form action="contactos.php" method="post">
						
						<div class="txt-contactos">Telefone</div>
					
						<input type="text" class="textarea-contactos" name="telefone" value="<?php echo $contactos['telefone'] ?>" >
							
							<div class="txt-contactos-email">Email</div>
					
						<input type="text" class="textarea-contactos" name="email" value="<?php echo $contactos['email']; ?>" >
				
							<div class="form-footer">
							
								<input type=submit class="botao-adicionar" value="Atualizar">
							
							</div>
					
					</form>
				</div>
				
				<?php include_once "footer.php"; ?>
			
			</div>
			
		</div>
		
	</body>
			
</html>