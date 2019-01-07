<html>
<head></head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="stock";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$uname=$_POST['subcat'];


$sql="CREATE TABLE $uname (Sno int(6) NOT NULL auto_increment PRIMARY KEY,Subcat varchar(60) NOT NULL,quantity int(50) NOT NULL,INDEX (Sno))";


$result = mysqli_query($conn,$sql);

if($result)
{
	echo "success";
	?><a href="login.php"><button class="btn btn-primary" >return</button></a><?php

}
else
{
	echo "failure";
	
	header('Location: login.php');
}
?></body>
</html>