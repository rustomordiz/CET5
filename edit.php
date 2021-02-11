<html>
	<head>
		<title>Dashboard</title>
	</head>
	<body>
<?php
    session_start();
    $id = $_GET['userid'];

    $server = "localhost";
    $user ="root";
    $pass ="";
    $con=mysqli_connect($server,$user,$pass);
    $db="sampledb";
    mysqli_select_db($con,$db);
	
	
	$sqlSelect = mysqli_query($con,"select * from tbl_sample where id = $id");
	$results = mysqli_fetch_object($sqlSelect);
	$id = $results->id;
    $sn = $results->site_name;
	$un = $results->username;
	$pw = $results->password;
	$su = $results->site_url;
	

    //EDITTING PROCESS
	if($_POST['go']){
		$wn = $_POST['webname'];
		$wu = $_POST['weburl'];
		$sun = $_POST['uname'];
		$spw = $_POST['pword'];
	
		//UPDATE Statement
		$sqlUpdate = mysqli_query($con,"update tbl_sample set site_name = '$wn', username = '$sun' , password = '$spw' , site_url = '$wu'  where id = $id");
		
		if($sqlUpdate){
            echo "<script>
            alert('Updating your login credentials successful!');
                if(confirm){
                    location.href = 'dashboard.php';
                }
            </script>";
		}else{
            echo "<script>alert('There was an error in modifying your Login Credential')</script>";
		}
	}
	
?>
<center>
<br> <br>
<h2>EDITTING:<br></h2>
	<form name="edit" method="POST">
		<b>WEBSITE NAME : <input type="text" name="webname" value="<?php echo $sn; ?>" required><br>
		<b>WEBSITE URL: <input type="text" name="weburl" value="<?php echo $su; ?>"required><br>
		<b>USERNAME: <input type="int" name="uname" value="<?php echo $un; ?>"required><br>
		<b>PASSWORD : <input type="int" name="pword" value="<?php echo $pw; ?>"required><br>

		<input type="submit" name="go" value="Change">
	</form>

	</body>
	
	 
	
</html>