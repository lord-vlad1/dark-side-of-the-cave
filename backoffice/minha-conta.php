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
					
						<div class="titulo">Minha Conta</div>
						
					</div>
					
					<?php
					
					if (!empty($_POST)) {
						
						$nome = $_POST['nome'];
						$psw = $_POST['psw'];
						$psw_enc = md5($psw);
						$new_password = $_POST['new_password'];
						$confirm_password = $_POST['confirm_password'];
						$new_password_enc = md5($new_password);
						
						$query_password_atual = mysqli_query($link,"SELECT password FROM t_users WHERE id='1'");
						$password_atual = mysqli_fetch_array($query_password_atual,MYSQLI_ASSOC);
						
						if($psw_enc == $password_atual['password']) {
							
							if($new_password != '') {
								
								if($new_password == $confirm_password) {
									
									mysqli_query($link, "UPDATE t_users SET nome='$nome', password='$new_password_enc' WHERE id='1'");
									
									echo '<div class="sucess-alert">Dados de utilizador editados com sucesso!</div>';
									
								} else {
									echo '<div class="alert-danger">ERRO, passwords nao coincidem!</div>';
								}
									
								
							} else {
								mysqli_query($link, "UPDATE t_users SET nome='$nome' WHERE id='1'");
								echo '<div class="sucess-alert">Dados de utilizador editados com sucesso!</div>';
							}
							
						} else {
							echo '<div class="alert-danger">ERRO Dados de utilizador não coincidem!</div>';
						}
						
					}
						$query_user = mysqli_query($link,"SELECT * FROM t_users WHERE id = '1'");
						$user = mysqli_fetch_array($query_user,MYSQLI_ASSOC);
						
						?>
					<form action="minha-conta.php" method="post">
						
					<div class="txt-contactos">Nome</div>

						<input type="text" class="textarea-contactos" name="nome" value="<?php echo $user['nome']; ?>">
						
					<div class="txt-contactos-email">Password Atual</div>
					
						<input type="password" class="textarea-contactos" name="psw">
					
					<div class="txt-contactos-email">Alterar Password</div>
					
						<input type="password" class="textarea-contactos" name="new_password">
					
					<div class="txt-contactos-email">Confirmar Password</div>
					
						<input type="password" class="textarea-contactos" name="confirm_password">
						
					<?php
					
						
					?>
						
					
					
				
					<div class="form-footer">
							
							<input type="submit" class="botao-adicionar" value="Atualizar">
							
					</div>
					
					</form>
				</div>
				
				<?php include_once "footer.php"; ?>
			
			</div>
			
		</div>
		
	</body>
			
</html>