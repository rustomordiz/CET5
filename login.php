<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<?php
		
			if($_POST['btnLogin']){
				$u = $_POST['username'];
				$p = $_POST['pass'];
				
	$server = "localhost";
	$uname = "root";
	$pass = "";
	$con = mysqli_connect($server,$uname,$pass);
	$db = "sampledb";
	mysqli_select_db($con,$db);
	
				$sqlSelect = mysqli_query($con,"select * from tbl_users where username='$u' and password='$p'");
				$results = mysqli_fetch_object($sqlSelect);
				$id = $results->id;
				$username = $results->username;
				$password = $results->password;
				
				if($id != ""){
					session_start();
					$_SESSION['user_id'] = $id;
					$_SESSION['user_name'] = $username;
					$_SESSION['user_password'] = $password;
					header('Location: dashboard.php');
				
				}else{
					echo "<script>alert('Login Failed')</script>";
				}
			}
		?>
		<center>
		<br><br><br>
	
		KEEP-IT-SIMPLE LOGIN <br><br>
		<form name="login" method="POST">
			USERNAME: <input type="text" name="username" id="uname" ><br>
			PASSWORD: <input type="password" name="pass"  id="upass"><br><br>
			<input type="submit" name="btnLogin" value="LOGIN"><br>
		</form>
			Don't Have an account? <a href="signup.php"> Sign up now! </a>
		
		
	
		</center>
	</body>
</html>