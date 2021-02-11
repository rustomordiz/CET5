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
/* Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.dropbtn2 {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

<body>
<br><br>
<center> 
	<!--WELCOME SECTION -->
<?php
session_start();
$user = $_SESSION['user_name'];
$userid = $_SESSION['user_id'];

echo"<h3> Welcome $user! </h3>";
?>
</center>
<br>

	<!--ADD-->
<button class="dropbtn2"><a href='insert.php'>ADD</a></button>

	<!--ACCOUNT -->
<div class="dropdown">
  <button class="dropbtn">ACCOUNT</button>
  <div class="dropdown-content">
  	<?php echo "<a href='accountedit.php?accountid=$userid'>CHANGE ACCOUNT DETAILS</a>"; ?>
	<a href='logout.php'>LOGOUT</a>
  </div>
</div>
<center>
	<!--LOGIN CREDENTIALS TABLE CONTENT -->
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

echo"<td>";
echo"<center>";
echo "<a href='edit.php?userid=$results->id'>EDIT</a>";
echo"</td>";

echo"<td>";
echo"<center>";
echo "<a href='delete.php?userid=$results->id'>DELETE</a>";
echo"</td>";

echo"<tr>";
}
?>
</tr>
</table>
</center>
</body>
</html>