<?php
	include "connection.php";
	include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=divice-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
		section
		{
				margin-top:-20px;
		}
	</style>
</head>
<body>
<section>
	<div class="reg_img">
		<br>
		<div class="box2">
			<br>
			<h1 style="text-align:center; font-size:30px; font-family: Lucid Console;">eBook Store</h1>			<h1 style="text-align:center; font-size:22px;">User Registration Form</h1><br>
			<form name="registration" action="" method="post">
				<br>
			<div class="reg">
			
				<input class="form-control" type="text" name="first" placeholder="First Name" required=""><br>
				<input class="form-control" type="text" name="last" placeholder="Last Name" required=""><br>
				<input class="form-control" type="text" name="username" placeholder="Username" required=""><br>
				<input class="form-control" type="password" name="password" placeholder="Password" required=""><br>
				<input class="form-control" type="text" name="id" placeholder="Student ID" required=""><br>				
				<input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
				<input class="form-control" type="text" name="contact" placeholder="Contact" required=""><br>
				<input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color:black; width:80px; height:30px; background-color:#28dcc3;">
				</div>
			</form>
			
		</div> 
	</div>

</section>
		<?php
			if(isset($_POST['submit']))
			{
				$count=0;
				$sql="SELECT username from Student";
				$req=mysqli_query($db,$sql);
					
				while($row=mysqli_fetch_assoc($req))
				{
					if($row['username']==$_POST['username'])
					{
						$count=$count+1;
					}
				}
				if($count==0)
				{
				
					mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[first]','$_POST[last]','$_POST[username]','$_POST[password]','$_POST[roll]','$_POST[email]','$_POST[contact]');");
				
				?>
	<script type="text/javascript">
	alert("Registration successful");
	</script>
				<?php
				}
				else
				{
					?>
					<script type="text/javascript">
					alert("The Username is already exist.");
					</script>
					<?php
				}
			}
		
		
		?>
		
</body>
</html>
