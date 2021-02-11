<?php
//DELETE//
	session_start();
    $id = $_GET['userid'];

	$server = "localhost";
    $user ="root";
    $pass ="";
    $con=mysqli_connect($server,$user,$pass);
    $db="sampledb";
    mysqli_select_db($con,$db);

    
	mysqli_query($con,"delete from tbl_sample where id = $id");

	header('Location: dashboard.php');

?>