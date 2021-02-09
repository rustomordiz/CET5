<html>
<head> </head>
<title>Dashboard </title>

<style>

body{
		background: url("96.jpg");
		background-size:cover;
}

h3 {
	font-family:courier;
	font-size:170%;
		border: 16px ;
		margin: 5px;
		
	}
h5{
	border: 10px ;
		margin: 8px;
}
h9{
	color:	#008080;
	font-family:Algerian;
		  font-size:330%;
}
h7{
	
	text-align: center;
	font-family:comic sans ms;
	font-size:120%;
		border: 15px ;
		margin: 15px;
}
</style>

<body>
<center> 
<h9><i><br> DATABASE CONNECTION</i></h9><br>
<br>
<table border="7", width="500" , bgcolor="#B0C4DE">

<tr>
<?php
$server = "localhost";
$user ="root";
$pass ="";
$con=mysqli_connect($server,$user,$pass);
$db="sampledb";
mysqli_select_db($con,$db);
session_start();
$user = $_SESSION['user_name'];
$sqlselect = mysqli_query($con,"select * from tbl_sample where username='$user'");
echo"<tr>";
echo"<center>";

echo"<th>";
echo"<h3>";
echo"SITE NAME";
echo"</th>";

echo"<th>";
echo"<h3>";
echo"PASSWORD";
echo"</th>";

echo"<th>";
echo"<h3>";
echo"SITE URL";
echo"</th>";

echo"</tr>";
while ($results=mysqli_fetch_object($sqlselect)){
echo"<tr>";

echo"<td>";
echo"<h7>";
echo"<center>";
echo $results->site_name." ";
echo"</td>";


echo"<td>";
echo"<h7>";
echo"<center>";
echo $results->password." ";
echo"</td>";


echo"<td>";
echo"<h7>";
echo"<center>";
echo "<a href='$results->site_url'>$results->site_url.</a>";
echo"</td>";
echo"<tr>";
}
?>
</tr>
</table>
<?php
	//LOGOUT
	echo "<br><a href='logout.php'>LOGOUT</a>";
?>
</body>
</html>