<html>
<head>
<title>
Create Account
</title>
</head>
<style>

</style>
<body>
<center>

<h2><br><br>Registration <br></h2>

<?php
//CONFIG
$server = "localhost";
$user ="root";
$pass ="";
$con=mysqli_connect($server,$user,$pass);
$db="sampledb";
mysqli_select_db($con,$db);

if($_POST['register']){
				
				$un = $_POST['uname'];
				$pw = $_POST['pass'];
				$em = $_POST['mail'];
				
				//INSERT Statement
				$sqlInsert = mysqli_query($con,"insert into tbl_users(username, password, email) values ('$un','$pw','$em')");
				
				if($sqlInsert){
                    echo "<script>alert('Your have successfully created your account! You can now Login your account.')</script>";
				}else{
                    echo "<script>alert('There was an error in creating your account! Try Again!')</script>";
				}
			}

				


?>
<form name="new" method="POST">
<table>
<tr>Username:  <input type="text" name="uname"required><br>
<tr>Password:  <input type="password" name="pass"required><br>
<tr>Email:  <input type="email" name="mail"required><br>

<input type="submit" name="register" value="Create Account"><br>
</table></form>
Got an account? <a href="login.php"> Login </a>

</body>
</html>