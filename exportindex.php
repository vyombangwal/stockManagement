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
$change=$_POST['change'];	
$subcat=$_POST['subcat'];
$catname=$_POST['catname'];
$sql="UPDATE $catname SET quantity= quantity-$change WHERE subcat='$subcat'";
$result=mysqli_query($conn,$sql);
?>
