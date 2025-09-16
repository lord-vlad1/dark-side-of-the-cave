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
					
						<div class="titulo">Adicionar Slideshow</div>
						
					</div>
					
					<form action="adicionar-slideshow.php" method="post" enctype="multipart/form-data">
					
						<?php
							
						if (!empty($_POST)) {
							
							$slogan = $_POST['slogan'];
							$btt_link = $_POST['btt_link'];
							$btt_txt = $_POST['btt_txt'];
							$estado = $_POST['estado'];
							
							mysqli_query($link,"INSERT INTO t_slideshow(slogan,btt_link,btt_txt,estado)
									VALUES ('$slogan','$btt_link','$btt_txt','$estado')") or die(mysqli_error($link));
							
							$id = mysqli_insert_id($link);
							
							$tmp = explode('.', $_FILES['image_form']['name']);
							$extensao = end($tmp);
							move_uploaded_file($_FILES['image_form']['tmp_name'], '../img/slider/'.$id.'.'.$extensao);
							
							echo "<div class='sucess-alert'>Slideshow adicionado com sucesso!</div>";
							
						}
							
						?>
							
						<div class="txt-contactos">Adicionar imagem</div>
					
						<input type="file" class="textarea-contactos" name="image_form">
							
							<div class="txt-contactos-email">Slogan</div>
					
						<input type="text" class="textarea-contactos" name="slogan">
					
							<div class="txt-contactos-email">Editar botão</div>
						
						<input type="text" class="textarea-contactos" name="btt_link">
					
							<div class="txt-contactos-email">Texto do botão</div>
					
						<input type="text" class="textarea-contactos" name="btt_txt">
						
							<div class="txt-contactos-email">Estado</div>
						
						<div class="radio-check-geral">
						
							<input type="radio" class="textarea-contactos2" name="estado" value="0"><div class="ativo-inativo">Inativo</div>
						
							<input type="radio" class="textarea-contactos2" name="estado" value="1"><div class="ativo-inativo">Ativo</div>
							
						</div>
						
							<div class="form-footer">
							
								<input type="submit" class="botao-adicionar" value="Atualizar">
								<a href="slideshow.php" class="botao-adicionar-voltar">Voltar</a>
							
							</div>
						
					</form>
					
				</div>
				
				<?php include_once "footer.php"; ?>
			
			</div>
			
		</div>
		
	</body>
			
</html>