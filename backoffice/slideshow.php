<!DOCTYPE html>
<html>
	<?php include_once "head.php"; ?>
	
	<body>
	
	<?php include_once "header.php"; ?>
		
		<div class="container-menu-body">
		
			<?php include_once "menu.php"; ?>
			
			<div class="container-body">
			
				<div class="container-branco">
					
					<div class="cabecalho">
						
						<div class="titulo">Slideshow</div>
					
						<a href="adicionar-slideshow.php" class="botao-adicionar"><i class="fas fa-plus"></i>Adicionar slideshow</a>
						
					</div>
						
					<div class="tabela">
					
						<div class="linha primeira">
							
							<div class="cell">Nome do Slide</div>
							<div class="cell">Estado</div>
							<div class="cell">Ações</div>
					
						</div>

						<?php
						
							$query_slideshow=mysqli_query($link,"SELECT * FROM t_slideshow");
						
							while ($slideshow = mysqli_fetch_array($query_slideshow,MYSQLI_ASSOC)) {
								
								echo '<div class="linha">';
									echo '<div class="cell">'.$slideshow['slogan'].'</div>';
									echo '<div class="cell">'.$slideshow['estado'].'</div>';
									echo '<div class="cell remove">';
										echo '<a href="editar-slideshow.php?id='.$slideshow['id'].'"><i class="fas fa-edit"></i></a>';
										echo '<a href="eliminar-slideshow.php?id='.$slideshow['id'].'"><i class="fas fa-trash-alt"></i></a>';
									echo '</div>';
								echo '</div>';
							}
						
						?>
						
					 </div>	
				
				</div>
				
				<?php 
				
					include_once "footer.php";
				
				?>
			
			</div>
			
		</div>
		
	</body>
			
</html>