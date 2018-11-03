<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jewel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$uname = $_POST['Name'];
$password = $_POST['Password'];
$email = $_POST['Email'];
    
$sql = "INSERT INTO loginform (username,password,email)
VALUES ('$uname','$password','$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	 header('location: login.html');
}
	
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

