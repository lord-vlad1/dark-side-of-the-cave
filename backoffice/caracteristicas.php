<!DOCTYPE html>
<html>

	<?php include_once "head.php";?>
	
	<body>
		
		<?php include_once "header.php"; ?>
	
		<div class="container-menu-body">
	
			<?php include_once "menu.php"; ?>
		
			<div class="container-body">
			
				<div class="container-branco">
					
					<div class="cabecalho">
				
					<div class="titulo-">Características</div>
					
						<div class="form-botao">
							
							<a href="adicionar-caracteristica.php" class="botao-adicionar"><i class="fas fa-plus"></i>Adicionar Característica</a>
							
						</div>
						
					</div>
					
					<div class="tabela">
					
						<div class="linha primeira">
							
							<div class="cell">Características</div>
							<div class="cell">Estado</div>
							<div class="cell">Ações</div>
					
						</div>
					
						<?php
						
							$query_caracteristicas=mysqli_query($link,"SELECT * FROM t_caracteristicas");
						
							while ($caracteristicas = mysqli_fetch_array($query_caracteristicas,MYSQLI_ASSOC)) {
								
								echo '<div class="linha">';
									echo '<div class="cell">'.$caracteristicas['txt_caracteristica'].'</div>';
									echo '<div class="cell">'.$caracteristicas['estado'].'</div>';
									echo '<div class="cell remove">';
										echo '<a href="editar-caracteristicas.php?id='.$caracteristicas['id'].'"><i class="fas fa-edit"></i></a>';
										echo '<a href="eliminar-caracteristicas.php?id='.$caracteristicas['id'].'"><i class="fas fa-trash-alt"></i></a>';
									echo '</div>';
								echo '</div>';
							}
						
						?>
					
					 </div>	
				</div>
				
				<?php include_once "footer.php"; ?>
			
			</div>
	
		</div>
		
	</body>
</html>