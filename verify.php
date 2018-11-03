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

$ux = $_POST['uname']; 
$px = $_POST['psw'];

$query="SELECT * from loginform where username='$ux' and password='$lx'";
$result=mysqli_query($conn,$query);

if(mysqli_num_rows($result)==1){
    session_start();
    $_SESSION['auth']='true';
    header('location: index.html');
}
else{
    $message = "INVALID USER";
    header('location: land.html');
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>