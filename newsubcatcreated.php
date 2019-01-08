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

$catname=$_POST['cat'];
$subcat=$_POST['subcatname'];
$quantity=$_POST['subcatquan'];
echo $catname;
$sql="INSERT INTO $catname(Subcat,quantity)
VALUES ('$subcat','$quantity')";
$result=mysqli_query($conn,$sql);


if($result)
{
	echo "category created successfully";
	?>
	<html>
	<head></head>
	<title></title>
	<body><a href=Stock.php><button>go back</button></a>
	</body>
	</html>
	<?php
}
else 
{
 echo "failed to create";
}
?>
