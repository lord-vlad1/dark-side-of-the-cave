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
					
						<div class="titulo">Adicionar Característica</div>
						
					</div>
					
					<form action="adicionar-caracteristica.php" method="post">
					
					<?php
					
						if (!empty($_POST)) {
							$txt_caracteristica = $_POST['txt_caracteristica'];
							$estado = $_POST['estado'];
							mysqli_query($link,"INSERT INTO t_caracteristicas(txt_caracteristica,estado)
								VALUES ('$txt_caracteristica','$estado')");
								
							echo "<div class='sucess-alert'>Característica adicionada com sucesso!</div>";
						}
					
						?>
							<div class="txt-contactos-email">Texto</div>
					
						<input type="text" class="textarea-contactos" name="txt_caracteristica">
						
						<div class="txt-contactos-email">Estado</div>
					
						<div class="radio-check-geral">
						
							<input type="radio" class="textarea-contactos2" name="estado" value="0"><div class="ativo-inativo">Inativo</div>
						
							<input type="radio" class="textarea-contactos2" name="estado" value="1"><div class="ativo-inativo">Ativo</div>
							
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