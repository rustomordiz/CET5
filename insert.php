<html>
<head>
<title>
Add Entry
</title>
</head>
<style>

</style>
<body>
<center>

<h2><br><br>Insert your Login Credentials <br></h2>

<?php
//CONFIG
$server = "localhost";
$user ="root";
$pass ="";
$con=mysqli_connect($server,$user,$pass);
$db="sampledb";
mysqli_select_db($con,$db);
session_start();
$user = $_SESSION['user_name'];
if($_POST['Insert']){
				
				$sn = $_POST['sitename'];
				$su = $_POST['siteurl'];
				$us = $_POST['username'];
				$pw = $_POST['password'];
				
				//INSERT Statement
				$sqlInsert = mysqli_query($con,"insert into tbl_sample(site_name, username, password, site_url, user) values ('$sn','$us','$pw','$su','$user')");
				
				if($sqlInsert){
                    echo "<script>
					alert('Your Login Credentials have successfully added into your account!.');
						if(confirm){
							location.href = 'dashboard.php';
						}
					</script>";
				}else{
                    echo "<script>alert('There was an error in inserting your Login credentials!')</script>";
				}
			}

				


?>
<form name="new" method="POST">
<table>
<tr>Website Name:  <input type="text" name="sitename" placeholder="Enter the Website Name" required><br>
<tr>Website URL:  <input type="text" name="siteurl" placeholder="Enter the Website URL" required><br>
<tr>Username:  <input type="text" name="username" placeholder="Enter your Username" required><br>
<tr>Password:  <input type="password" name="password" placeholder="Enter your Password" required><br><br>
<input type="submit" name="Insert" value="Submit"><br>
</table></form>
<a href="dashboard.php"> Cancel </a>

</body>
</html>