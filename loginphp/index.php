<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "blogsite";

$conn= new mysqli($servername,$username,$password,$database);

if(!$conn){
	die("Error".mysqli_connect_error());
}
else{
	// echo "right connection"
}

$qu ="SELECT * FROM `user`";
if($conn->query($qu)){
	$result = $conn->query($qu);
}else{
	echo "error";
}
while ($resultdata = $result->fetch_assoc()) {
	echo $resultdata["name"]."".$resultdata["email"]."<br>";
}
?>
