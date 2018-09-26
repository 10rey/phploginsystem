<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Php Login System</title>
	<link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>

	<header>

		<nav>
			<div class="main-wrapper">
				<ul>
					<li><a href="index.php">Home</a></li>
				</ul>

				<div class="nav-login">

					<?php 

						if (isset($_SESSION['u_uid'])) {

							echo '<form action="includes/logout.inc.php" method="post">
							 	<button type="submit" name="submit">Logout</button>
							 </form>';
						}else{

							echo '<form action="includes/login.inc.php" method="post">
								<input type="text" name="uid" placeholder="Username/email">
								<input type="password" name="pwd" placeholder="password">
								<button type="submit" name="submit">Login</button>
							</form>
							
							<a href="signup.php">Sign up</a>';
						}

					 ?>

				</div>
			</div>
		</nav>
		
	</header>