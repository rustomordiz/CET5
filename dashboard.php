<html>
<head> </head>
<title>Dashboard </title>

<style>

h3 {
	font-family:courier;
	font-size:1.5em;
	border: 5px ;
	margin: 5px;
		
	}

</style>

<body>
<br><br>
<center> 
	<!--WELCOME SECTION -->
<?php
session_start();
$user = $_SESSION['user_name'];
echo"<h3> Welcome $user! </h3>";
?>

<br>
<a href='insert.php'>ADD</a><br><br>
<table border="10", width="800" , bgcolor="#B0C4DE">
<tr>

<?php
$server = "localhost";
$user ="root";
$pass ="";
$con=mysqli_connect($server,$user,$pass);
$db="sampledb";
mysqli_select_db($con,$db);
$user = $_SESSION['user_name'];
$sqlselect = mysqli_query($con,"select * from tbl_sample where user='$user'");
echo"<tr>";
echo"<center>";

echo"<th>";
echo"<h3>";
echo"WEBSITE NAME";
echo"</th>";

echo"<th>";
echo"<h3>";
echo"USER NAME";
echo"</th>";

echo"<th>";
echo"<h3>";
echo"PASSWORD";
echo"</th>";

echo"<th>";
echo"<h3>";
echo"WEBSITE URL";
echo"</th>";
echo"</tr>";

while ($results=mysqli_fetch_object($sqlselect)){
echo"<tr>";
echo"<td>";
echo"<center>";
echo $results->site_name." ";
echo"</td>";

echo"<td>";
echo"<center>";
echo $results->username." ";
echo"</td>";

echo"<td>";
echo"<center>";
echo $results->password." ";
echo"</td>";

echo"<td>";
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