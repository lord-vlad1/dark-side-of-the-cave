<?php include_once "config.php"; ?>

<!DOCTYPE html>
<html>

	<head>
	
		<meta charset="utf-8">
		
		<title>Darkside Backoffice login</title>
		
		<link rel="stylesheet" href="css/reset.css">
		
		<link rel="stylesheet" href="css/css-login.css">
		
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
	</head>
	
	<body>
			
		<div class="container">
				
			<div class="container-login">
				
				<form action="index.php" method="post">
					
					<img class="logo" src="img/logo_pap.png">
					
					<div class="txt-box">
					
						<input type="text" placeholder="Username" name="uname" required>
					
						<input type="password" placeholder="Password" name="psw" required>
						
						<?php
						
							if (!empty($_POST)) {
								$uname = $_POST['uname'];
								$psw = $_POST['psw'];
								$psw = md5($psw);
								$query_user = mysqli_query($link,"SELECT * FROM t_users WHERE username='$uname' AND password='$psw'");
								if (mysqli_num_rows($query_user)>0 ) {
									session_start();
									$_SESSION[$sessao]=$uname;
									echo"<script> window.location.href='dashboard.php';</script>";
								}
								else {
									echo"<div class='erro-form'> <i class='fas fa-exclamation-triangle'></i> Dados de utilizador incorretos</div>";
								}
							}
						
						
						?> 
					
						<button type="submit">Login</button>
						
					</div>
					
				</form>
				
			</div>
			
		</div>
		
	</body>
	
</html>