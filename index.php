<?php include_once 'backoffice/config.php';?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>The Dark Side of the Cave</title>
		
		<link rel="stylesheet" href="css/reset.css">
        
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
        <link rel="stylesheet" href="css/css.css">
		
		<link href="https://fonts.googleapis.com/css?family=Creepster" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Carme" rel="stylesheet">
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-witdh, initial-scale=1">
		
		<!-- include jQuery -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

		<!-- include Cycle2 -->
		<script src="js/jquery.cycle2.min.js"></script>
		
        
    </head>
    <body>
		
		<?php include_once 'header.php'; ?>
		
		<div class="body-container" id="section1">
			
				<div class="calendario">
		
					<div class="date-square-black">
				
							04 <br> <font size="32">Abril</font>
					
					</div>
				
					<div class="date-square-red">
				
							2019
						
					</div>
			
					<div class="date-square-blood"></div>
			
				</div>
			
			
				<div class="sobre-o-jogo">
			
					<p>SOBRE<br><font size="32">O JOGO</font></p>
					
					<?php
					
						$query_sobre = mysqli_query($link, "SELECT * FROM t_sobre");
						
						while($sobre = mysqli_fetch_assoc($query_sobre)) {
							echo '<div class="texto-jogo"> 
									'.$sobre['txt_sobre'].'</div>';
						}
					
					?>
					
					<div class="caracteristicas">
					
						Características
					
					</div>
					
					<?php
					
						$query_caracteristicas = mysqli_query($link, "SELECT * FROM t_caracteristicas WHERE estado='1'");
						
						while($caracteristica = mysqli_fetch_array($query_caracteristicas, MYSQLI_ASSOC)) {
							echo '<div class="caracteristicas1"> 
									<i class="fas fa-gamepad"></i>'.$caracteristica['txt_caracteristica'].'</div>';
						}
					
					?>
					
				</div>		
		</div>
		
		<div class="container-prints">
			 
			<div class="prints-jogo">
				
				<div class="print">
					<?php
					$tmp = glob('img/capturas/1.*');
					$extensao = pathinfo($tmp[0], PATHINFO_EXTENSION);
					?>
					<div class="imagem" style="background-image: url(img/capturas/1.<?php echo $extensao; ?>)"></div>
					<img class="moldura" src="img/slider/scray%20frame.png">
				</div>
				
				<div class="print">
					<?php
					$tmp = glob('img/capturas/2.*');
					$extensao = pathinfo($tmp[0], PATHINFO_EXTENSION);
					?>
					<div class="imagem" style="background-image: url(img/capturas/2.<?php echo $extensao; ?>)"></div>
					<img class="moldura" src="img/slider/scray%20frame.png">
				</div>
				
				<div class="print">
					<?php
					$tmp = glob('img/capturas/3.*');
					$extensao = pathinfo($tmp[0], PATHINFO_EXTENSION);
					?>
					<div class="imagem" style="background-image: url(img/capturas/3.<?php echo $extensao; ?>)"></div>
					<img class="moldura" src="img/slider/scray%20frame.png">
				</div>
				
				<div class="print">
					<?php
					$tmp = glob('img/capturas/4.*');
					$extensao = pathinfo($tmp[0], PATHINFO_EXTENSION);
					?>
					<div class="imagem" style="background-image: url(img/capturas/4.<?php echo $extensao; ?>)"></div>
					<img class="moldura" src="img/slider/scray%20frame.png">
				</div>
							
			</div>
			
		</div>
		
		<div class="quem-somos" id="section2">
			
			<div class="container-quem-somos">
				
				<div class="cruz-titulo">
				
					<img class="cruz-img" src="img/containers/cross.fw.png">
							
						<div class="quem-somos-titulo">

							QUEM SOMOS
					
						</div>
					
				</div>	
					
					<?php
					
						$query_txt_quem_somos = mysqli_query($link, "SELECT * FROM t_quem_somos WHERE id='1'");
						
						while($txt_quem_somos = mysqli_fetch_assoc($query_txt_quem_somos)) {
							echo '<div class="texto-quem-somos">'.$txt_quem_somos['txt_quem_somos'].'</div>';
						}
					
					?>
					
			
		   </div>
			
		</div>
		
		<div class="preto-download-jogo" id="section3">
		
			<div class="container-download">
				
				
					<div class="titulo-download">
						TRANSFIRA O JOGO AGORA!
					</div>
				
					<a class="btt_dropbox2" href="#" >
						<i class="fas fa-caret-right"></i>
						Transferir
					</a>
					
				<div class="sonic"></div>
				
				<div class="samara"></div>
				
			</div>
		
		</div>
		
		<div class="body-container" id="section4">
			
					<div class="img-lapide"></div>
			
				<div class="container-contatos">
			
						<div class="contactos-txt">
			
							Contactos
			
						</div>
			
						<div class="entrar-contato">
			
							ENTRAR EM CONTACTO
						
							<div class="todos-gamepad-icons">
					
								<i class="gamepad-icon"></i>
					
								<i class="gamepad-icon"></i>
						
									<i class="gamepad-icon"></i>
					
									<i class="gamepad-icon"></i>
					
									<i class="gamepad-icon"></i>
					
									<i class="gamepad-icon"></i>
							
									<i class="gamepad-icon"></i>
								
							</div>
					
						</div>
				
				</div>			
		
		</div>
		
		<div class="container-form">
		
			<div class="formulario-email">
			
				<form action="xiquito99@hotmail.com" method="post" enctype="text/plain">
				
					<input type="text" name="pnome" placeholder="Nome">
					<input type="text" name="email" placeholder="Email">
					<input type="text" name="assunto" placeholder="Assunto"><br>
					
					<div class="formulario-mensagem">
						
						<textarea type="text" name="mensagem" placeholder="A sua mensagem"></textarea>
						
					</div>
				
					<input type="submit" value="Enviar Mensagem">
			
				</form>
		
			</div>
			
		</div>
			
		<div class="container-informacao">
			
			<div class="texto-informacao">
					
				<?php
					
				$query_contactos = mysqli_query($link, "SELECT * FROM t_contactos WHERE id = '1'");
				$contactos = mysqli_fetch_assoc($query_contactos);
				
				?>
			
				<div class="telefone-informacao">
				
					<i class="fas fa-phone fa-rotate-90"></i> TELEFONE<br>
					<?php echo $contactos['telefone']; ?>
				
				</div>
				
				<div class="email-informacao">
				
					<i class="fas fa-envelope-square email-icon"></i>EMAIL<br>
					
					<div class="text-email"><a href="mailto:<?php echo $contactos['email'];?>"><?php echo $contactos['email'];?></a></div>
					
				</div>
			
			</div>
			
			<div class="esqueleto"></div>
			
			<div class="teia"></div>
		
		</div>
		
		<?php include_once 'footer.php'; ?>
		
		<?php 
		
		$ip=$_SERVER['REMOTE_ADDR'];
		$data=date('Y-m-d H:i:s');
		
		$query=mysqli_query($link, "SELECT * FROM t_visitas WHERE ip = '$ip'");
		
		if(mysqli_num_rows($query)==0) {
			mysqli_query($link, "INSERT INTO t_visitas (ip,data) VALUES ('$ip','$data')");
		}
		?>
		
    </body>
</html>