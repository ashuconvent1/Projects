


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wil";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$dob = $_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];
echo $dob;
$sql = "SELECT * FROM users WHERE email='".$_POST['email']."' AND password ='".$_POST['password']."' ";
$result = $conn-> query($sql);

if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
  $_SESSION ["email"] = $row['email'];
   header('Location: http://localhost/will/landingPage.php');
}else {
	echo "Invalid Password"
}




?>