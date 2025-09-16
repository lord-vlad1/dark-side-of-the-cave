<div class="footer">
			
			<div class="container-footer">
		
				<div class="text-copyright">
			
					Copyright © 2019 The Dark Side of the Cave  |  Todos os direitos reservados
			
				</div>
				
				<?php
					$query_social = mysqli_query($link, "SELECT * FROM t_social WHERE id='1'");	
					$social = mysqli_fetch_assoc($query_social);
				?>
				
				<div class="social-media">
					<a target="_blank" href="<?php echo $social['instagram']; ?>" class="instagram-icon"></a>
					<a target="_blank" href="<?php echo $social['facebook']; ?>" class="facebook-icon"></a>
					<a target="_blank" href="<?php echo $social['youtube']; ?>" class="youtube-icon"></a>
					<a target="_blank" href="<?php echo $social['skype']; ?>" class="skype-icon"></a>
				</div>
				
			</div>
			
		</div>