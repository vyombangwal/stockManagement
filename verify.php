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

$uname=$_POST['uname'];
$pw=$_POST['pword'];

$sql="SELECT * FROM user WHERE username='$uname' AND password='$pw'";

$result = mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count>0)
{
	echo "success";
}
else
{
	echo "failure";
	
	header('Location: login.php');
}
?>