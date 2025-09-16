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
					
						<div class="titulo">Adicionar Capturas</div>
						
					</div>
					
					<form action="adicionar-capturas.php" method="post" enctype="multipart/form-data" >
					
						<?php
						
							if (!empty($_POST)) {
								
								$nome_captura = $_POST['nome_captura'];
								$estado = $_POST['estado'];
								
								mysqli_query($link,"INSERT INTO t_capturas(nome_captura,estado)
									VALUES ('$nome_captura','$estado')") or die(mysqli_error($link));
								
								$id = mysqli_insert_id($link);
								
								$tmp = explode('.', $_FILES['image_captura']['name']);
								$extensao = end($tmp);
								move_uploaded_file($_FILES['image_captura']['tmp_name'], 	'../img/slider/'.$id.'.'.$extensao);
								
								echo "<div class='sucess-alert'>Captura adicionada com sucesso!</div>";
							}
					
						?>
						
						<div class="txt-contactos">Adicionar Imagem</div>
					
						<input type="file" class="textarea-contactos" name="image_captura">
							
							<div class="txt-contactos-email">Nome da Captura</div>
					
						<input type="text" class="textarea-contactos" name="nome_captura">
							
						<div class="txt-contactos-email">Estado</div>
						
						<div class="radio-check-geral">
						
							<input type="radio" class="textarea-contactos2" name="estado" value="0"><div class="ativo-inativo">Inativo</div>
						
							<input type="radio" class="textarea-contactos2" name="estado" value="1"><div class="ativo-inativo">Ativo</div>
							
						</div>
						
							<div class="form-footer">
							
								<input type="submit" class="botao-adicionar" value="Atualizar">
								<a href="capturas-de-ecra.php" class="botao-adicionar-voltar">Voltar</a>

							
							</div>
						
					</form>
					
				</div>
				
				<?php include_once "footer.php"; ?>
			
			</div>
			
		</div>
		
	</body>
			
</html>