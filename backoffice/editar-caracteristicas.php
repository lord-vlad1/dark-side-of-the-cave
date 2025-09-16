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
					
						<div class="titulo">Editar Característica</div>
						
					</div>
					
					<?php
					
					$id = $_REQUEST['id'];
					
					if (!empty($_POST)) {
						$txt_caracteristica = $_POST['txt_caracteristica'];
						$estado = $_POST['btt_estado'];
						mysqli_query($link,"UPDATE t_caracteristicas SET txt_caracteristica='$txt_caracteristica',  estado='$estado' WHERE id='$id'");
										
						echo "<div class='sucess-alert'>Característica editada com sucesso!</div>";
					}
					
					$query_slide = mysqli_query($link,"SELECT * FROM t_caracteristicas WHERE id = '$id'");
					$slide = mysqli_fetch_array($query_slide,MYSQLI_ASSOC);
					
					?>
			
					<form action="editar-caracteristicas.php?id=<?php echo $id; ?>" method="post">
					
						<div class="txt-contactos-email">Texto</div>
						<input type="text" class="textarea-contactos" name="txt_caracteristica" value="<?php echo $slide['txt_caracteristica']; ?>">
					
						<div class="txt-contactos-email">Estado</div>
						<div class="radio-check-geral">
							<input type="radio" class="textarea-contactos2" name="btt_estado" value="0" <?php if($slide['estado']=='0') { echo 'checked'; } ?>><div class="ativo-inativo">Inativo</div>
							<input type="radio" class="textarea-contactos2" name="btt_estado" value="1" <?php if($slide['estado']=='1') { echo 'checked'; } ?>><div class="ativo-inativo">Ativo</div>
						</div>
						
						<div class="form-footer">
							<input type="submit" class="botao-adicionar" value="Atualizar">
							<a href="caracteristicas.php" class="botao-adicionar-voltar">Voltar</a>
						</div>
						
					</form>
					
				</div>
				
				<?php include_once "footer.php"; ?>
			
			</div>
		</div>
	</body>
</html>