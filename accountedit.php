<html>
	<head>
		<title>Account Details</title>
	</head>
	<body>
<?php
    session_start();
    $id = $_GET['accountid'];

    $server = "localhost";
    $user ="root";
    $pass ="";
    $con=mysqli_connect($server,$user,$pass);
    $db="sampledb";
    mysqli_select_db($con,$db);
	
	
	$sqlSelect = mysqli_query($con,"select * from tbl_users where id = $id");
	$results = mysqli_fetch_object($sqlSelect);
	$id = $results->id;
   	$un = $results->username;
	$pw = $results->password;
	$em = $results->email;
	

    //EDITTING PROCESS
	if($_POST['go']){
		$spw = $_POST['pword'];
        $sem = $_POST['mail'];
	
		//UPDATE Statement
		$sqlUpdate = mysqli_query($con,"update tbl_users set password = '$spw' , email = '$sem' where id = $id");
       

		if($sqlUpdate){
                echo "<script>
                alert('Updating your Account successful!');
                   if(confirm){
                    location.href = 'dashboard.php';
                     }
                 </script>";
		}else{
            echo "<script>alert('There was an error in updating your Account')</script>";
		}
	}
	
?>
<center>
<br> <br>
<h2>YOUR ACCOUNT INFORMATION:<br></h2>
	<form name="edit" method="POST">
		<b>PASSWORD : <input type="int" name="pword" value="<?php echo $pw; ?>"required><br>
        <b>EMAIL : <input type="int" name="mail" value="<?php echo $em; ?>"required><br>

		<input type="submit" name="go" value="Change">
	</form>
		 <br><a href='dashboard.php'> Cancel </a>

	</body>
	
	 
	
</html>