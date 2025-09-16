<?php include_once 'config.php';?>
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
				
						<div class="titulo">Painel de Controlo</div>
						
					</div>
					
					<hr>

						<div class="estatisticas-container">
				
							<div class="body-txt-border">
								Total de visitas
								 <div class="elemento-chart">
									<i class="fas fa-chart-line"></i>
									<?php  
									 
									$result = mysqli_query($link, "SELECT * FROM t_visitas");
									$num_rows = mysqli_num_rows($result);
									echo "$num_rows\n";
									 
									?>
								</div>
							</div>
					
							<div class="body-txt-border">
								Total de downloads
								<div class="elemento-chart">  
									<i class="fas fa-chart-line"></i>
									<?php
									
									$query = mysqli_query($link, "SELECT clicks FROM t_slideshow");
									
									$total = 0;
									while ($row = mysqli_fetch_array($query)) {
										$total = $total + $row['clicks'];
									}
										echo "$total\n";
									
									?>
								</div>
							</div>
					
						</div>
					
					<div class="body-txt">
					
						Se tiver alguma duvida entre em contacto através do email. <br> xiquito99@hotmail.com
					
					</div>
				</div>
				
				<?php 
					include_once "footer.php";
				?>
				
			</div>	
		</div>
		<!--.container-menu-body-->	
	</body>
</html>