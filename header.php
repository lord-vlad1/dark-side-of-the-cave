	<div class="banner-bg">
	
	<div class="container-top">
		<div class="header">
			<div class="logo"></div>
			<i class="material-icons menu-toggle">menu</i>
			<ul class="menu">
				<li><a href="#section1">Sobre o Jogo</a></li>
				<li><a href="#section2">Quem Somos</a></li>
				<li><a href="#section3">Download</a></li>
				<li><a href="#section4">Contactos</a></li>
			</ul>
		</div>
	</div>
	<!--.container-top-->
	
	<script>
	
		$('.menu-toggle').click(function(){
			$('.menu').slideToggle();
		});
	
	</script>
	
	<div class="slider">
		<?php 
		
		$query=mysqli_query($link,"SELECT * FROM t_slideshow WHERE estado=1");
		while ($slide=mysqli_fetch_assoc($query)) {
			$tmp = glob('img/slider/'.$slide['id'].'.*');
			$extensao = pathinfo($tmp[0], PATHINFO_EXTENSION);
			echo '<div class="slide" style="background-image: url(\'img/slider/'.$slide['id'].'.'.$extensao.'\')"
			 		data-cycle-slogan="'.$slide['slogan'].'"
			 		data-cycle-txt-btn="'.$slide['btt_txt'].'"
					data-cycle-id='.$slide['id'].'"></div>';
		}
		
		?>
	</div>
	<!--.slider-->
	
	<div class="header2">
		<div class="container-top"></div>	
	</div>
	<!--.header2-->
	
	<script>
		$(document).ready(function(){
			$('.slider').cycle({
				slides: '.slide',
				captionTemplate: '<div class="slogan">{{cycleSlogan}}</div> <a class="btt_dropbox" href="btn_click.php?id={{cycleId}}"><i class="fas fa-caret-right"></i>{{cycleTxtBtn}}</a>',
				caption: '.header2 .container-top' 
			});
		});
	</script>
	

<!--	<div class="mao"></div>-->
	
</div>