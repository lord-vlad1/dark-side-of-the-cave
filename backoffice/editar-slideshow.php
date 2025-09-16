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
					
						<div class="titulo">Editar Slideshow</div>
						
					</div>
					
					<?php
					
					$id = $_REQUEST['id'];
					
					if (!empty($_POST)) {
						$slogan = $_POST['slogan'];
						$btt_link = $_POST['btt_link'];
						$btt_txt = $_POST['btt_txt'];
						$estado = $_POST['btt_estado'];
						mysqli_query($link,"UPDATE t_slideshow SET slogan='$slogan',btt_link='$btt_link',btt_txt='$btt_txt',estado='$estado'
							WHERE id='$id'");
						
						if(is_uploaded_file($_FILES['image_form']['tmp_name'])) {
							$tmp = glob('../img/slider/'.$id.'.*');
							$extensao = pathinfo($tmp[0], PATHINFO_EXTENSION);
							unlink('../img/slider/'.$id.'.'.$extensao);
								
							$tmp = explode('.', $_FILES['image_form']['name']);
							$extensao = end($tmp);
							move_uploaded_file($_FILES['image_form']['tmp_name'], '../img/slider/'.$id.'.'.$extensao);
						}
						
										
						echo "<div class='sucess-alert'>Slideshow editado com sucesso!</div>";
					}
						
					$query_slide = mysqli_query($link,"SELECT * FROM t_slideshow WHERE id = '$id'");
					$slide = mysqli_fetch_array($query_slide,MYSQLI_ASSOC);
						
					?>
						
					<form action="editar-slideshow.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
					
						<div class="txt-contactos">Adicionar imagem</div>
					
						<input type="file" class="textarea-contactos" name="image_form">
							
							<div class="txt-contactos-email">Slogan</div>
					
						<input type="text" class="textarea-contactos" name="slogan" value="<?php echo $slide['slogan']; ?>">
					
						<div class="txt-contactos-email">Editar botão</div>
						
						<input type="text" class="textarea-contactos" name="btt_link" value="<?php echo $slide['btt_link']; ?>">
					
						<div class="txt-contactos-email">Texto do botão</div>
					
						<input type="text" class="textarea-contactos" name="btt_txt" value="<?php echo $slide['btt_txt']; ?>">
						
						<div class="txt-contactos-email">Estado</div>
						
						<div class="radio-check-geral">
						
							<input type="radio" class="textarea-contactos2" name="btt_estado" value="0" <?php if($slide['estado']=='0') { echo 'checked'; } ?> ><div class="ativo-inativo">Inativo</div>
						
							<input type="radio" class="textarea-contactos2" name="btt_estado" value="1" <?php if($slide['estado']=='1') { echo 'checked'; } ?> ><div class="ativo-inativo">Ativo</div>
							
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