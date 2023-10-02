
<?php 
session_start();
    require_once "../connection/connection.php"; 
    $message="Email Or Password Does Not Match";
    if(isset($_POST["btnlogin"]))
    {
        $username=$_POST["email"];
        $password=$_POST["password"];

        $query="select * from login where user_id='$username' and Password='$password' ";
        $result=mysqli_query($con,$query);
        if (mysqli_num_rows($result)>0) {
            while ($row=mysqli_fetch_array($result)) {
               if ($row["Role"]=="Student")
                {
                    $_SESSION['LoginStudent']=$row['user_id'];
                    header('Location: ../student/student-index.php');
                }
            }
        }
        else
        { 
            header("Location: admin_login.php");
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<link rel='stylesheet' href='aslogin.css'>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
</head>

<body>
	<center>
		<div id="bg"></div>

		<form action="" method="post">

			<h2>Student Login</h2>
			<div class="form-field">
				<input type="text" name="email" placeholder="Email / Username" required >
			</div>

			<div class="form-field">
				<input type="password" name="password" placeholder="Password" required >
				
			</div>

			<div class="form-field">
				<button input type="submit" class="btn" name="btnlogin" type="button">Log in</button>
			</div>


		</form>


		
	</center>
</body>

</html>