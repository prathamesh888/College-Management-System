<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<link rel='stylesheet' href='../Css/login.css'>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
</head>


<body>
<?php include('../common/common-header.php') ?>
	<center><br><br>
	<h1><b>COLLEGE MANAGEMENT SYSTEM</h1><br>
	<form action="" method="POST">
	<button input type="submit" class="glow-on-hover" name="admin_login"    type="button">ADMIN LOGIN</button>
	<button input type="submit" class="glow-on-hover" name="student_login"    type="button">STUDENT LOGIN</button>
		
		
	</form>
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?>
	</center>
</body>
</html>