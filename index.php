<?php
	session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		eBook Store
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, initila-scale=1"> 
	<style type="text/css">	
		nav
		{
			float:right;
			word-spacing:30px;
			padding:30px;
		}
		nav li 
		{
			display:inline;
			line-height:80px;
		}
	</style>
</head>
<body>
	<div class = "wrapper">
		<header>
			<div class="logo">
				<img src="img/3.png", height="100px", width="100px">
				<h1 style="color:white; margin-left:80px;">eBook Store</h1>
			</div>

			<?php 

			if(isset($_SESSION['login_user']))
			{
				echo $_SESSION['login_user'];
			?>
					<nav>
						<ul>
							<li><a href="index.php">HOME</a></li>
							<li><a href="books.php">ACADEMIC</a></li>
							<li><a href="books.php">NON-ACADEMIC</a></li>
							<li><a href="logout.php">LOGOUT</a></li>
							<li><a href="feedback.php">FEEDBACK</a></li>	
						</ul>
					</nav>
			<?php
			}
			else
			{
			?>
					<nav>
						<ul>
							<li><a href="index.php">HOME</a></li>
							<li><a href="books.php">ACADEMIC</a></li>
							<li><a href="books.php">NON-ACADEMIC</a></li>
							<li><a href="student_login.php">STUDENT-LOGIN</a></li>
							<li><a href="user_registration.php">SIGN-UP</a></li>
							<li><a href="feedback.php">FEEDBACK</a></li>	
						</ul>
					</nav>
			<?php
			}
			?>

			
			

		</header>
		<section>
		<div class="sec_img">
			
		</div>
		</section>
		

	</div>
	<?php  

		include "footer.php";
	?>
</body>
</html>