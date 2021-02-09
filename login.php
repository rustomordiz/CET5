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
					echo "Successful login!";
					session_start();
					$_SESSION['user_id'] = $id;
					$_SESSION['user_name'] = $username;
					$_SESSION['user_password'] = $password;
					header('Location: dashboard.php');
				
				}else{
					echo "<br> Login failed!";
				}
			}
		?>
		<center>
		<br><br><br>
	
		<l>KEEP-IT-SIMPLE LOGIN </l>
		<form name="login" method="POST">
			<x>USERNAME: <input type="text" name="username" placeholder="Username" id="uname" ><br></x>
			<x>PASSWORD: <input type="password" name="pass" placeholder="Password" id="upass"><br>
			<input type="submit" name="btnLogin" value="LOGIN">
				</form>
		
		
	
		</center>
	</body>
</html>