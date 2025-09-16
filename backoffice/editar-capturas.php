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
					
						<div class="titulo">Editar Capturas</div>
						
					</div>
					
					<?php
					
					$id = $_REQUEST['id'];
					
					if (!empty($_POST)) {
						$nome_captura = $_POST['nome_captura'];
						$estado = $_POST['btt_estado'];
						mysqli_query($link,"UPDATE t_capturas SET nome_captura='$nome_captura', estado='$estado' WHERE id='$id'");
						
						if(is_uploaded_file($_FILES['image_captura']['tmp_name'])) {
							$tmp = glob('../img/capturas/'.$id.'.*');
							$extensao = pathinfo($tmp[0], PATHINFO_EXTENSION);
							unlink('../img/capturas/'.$id.'.'.$extensao);
								
							$tmp = explode('.', $_FILES['image_captura']['name']);
							$extensao = end($tmp);
							move_uploaded_file($_FILES['image_captura']['tmp_name'], '../img/capturas/'.$id.'.'.$extensao);
						}
										
						echo "<div class='sucess-alert'>Captura editada com sucesso!</div>";
					}
					
					$query_slide = mysqli_query($link,"SELECT * FROM t_capturas WHERE id = '$id'");
					$slide = mysqli_fetch_array($query_slide,MYSQLI_ASSOC);
					
					?>
			
					<form action="editar-capturas.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
						
						<div class="txt-contactos">Adicionar imagem</div>
					
						<input type="file" class="textarea-contactos" name="image_captura">
					
						<div class="txt-contactos-email">Nome captura</div>
						
						<input type="text" class="textarea-contactos" name="nome_captura" value="<?php echo $slide['nome_captura']; ?>">
					
						
						
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