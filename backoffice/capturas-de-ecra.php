<html>

	<?php include_once "head.php";?>
	
	<body>
	
		<?php include_once "header.php" ?>
		
		<div class="container-menu-body">
		
			<?php include_once "menu.php"; ?>
			
			<div class="container-body">
			
				<div class="container-branco">
					
					<div class="cabecalho">
				
					<div class="titulo-">Capturas de ecrã</div>
					
					</div>
					
					<div class="tabela">
					
						<div class="linha primeira">
							
							<div class="cell">Capturas</div>
							<div class="cell">Ações</div>
					
						</div>
						
						<?php
						
							$query_capturas=mysqli_query($link,"SELECT * FROM t_capturas");
						
							while ($capturas = mysqli_fetch_array($query_capturas,MYSQLI_ASSOC)) {
								
								echo '<div class="linha">';
									echo '<div class="cell">'.$capturas['nome_captura'].'</div>';
									echo '<div class="cell remove">';
										echo '<a href="editar-capturas.php?id='.$capturas['id'].'"><i class="fas fa-edit"></i></a>';
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