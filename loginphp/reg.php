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
	// echo "right connection";
}

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["pass"];

$qu = "INSERT INTO `user`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";

if($conn->query($qu)){
	// echo "Done";

}
$link_address1 = 'signup.php';
echo "<a href='".$link_address1."'>Done</a>";
// echo ' <a href="signup.php">signup.php</a>';
?>