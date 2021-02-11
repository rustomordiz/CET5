<html>
	<head>
		<title>Forgot Password</title>
	</head>
<body>

<?php
    error_reporting(0);
    if($_POST['send']){
        $to = $_POST['mail'];
        $subject = "Forgot Username / Password";

        $server = "localhost";
	    $uname = "root";
	    $pass = "";
	    $con = mysqli_connect($server,$uname,$pass);
    	$db = "sampledb";
	    mysqli_select_db($con,$db);

        $sqlSelect = mysqli_query($con,"select * from tbl_users where email='$to'");
		$results = mysqli_fetch_object($sqlSelect);
		$id = $results->id;
		$username = $results->username;
		$password = $results->password;

        $body = "You requested for your username/password on your Keep-It-Simple account.
        Your Username : $username 
        Your Password : $password ";

        if($username!=""){
            mail($to, $subject, $body,$headers);
            echo "<script>alert('Your Username / Password has been sent on your email account')</script>";
        }else {
            echo "<script>alert('Invalid Email Address!')</script>";
            }
        }
?>
    <br>
    <center>
    <form name="login" method="POST">
		Enter your Email: <input type="email" name="mail" id="mail" ><br>
		<br><input type="submit" name="send" value="Submit"><br>
    </form>
		<a href="login.php"> Cancel </a><br>
    </body>
    </html>