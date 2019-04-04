


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
$fullName =$_POST['first'].' '.$_POST['last'];
echo $dob;
$sql = "INSERT INTO users (username,firstname,lastname, password,email,gender,dob,favBike)
VALUES ('".$fullName."', '".$_POST['first']."', '".$_POST['last']."','".$_POST['password']."','".$_POST['email']."','".$_POST['gender']."','".$dob."','".$_POST['bike']."')";

if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
   header('Location: http://localhost/will/index.php');
} else {
    echo "Error:" . $conn->error;
}

$conn->close();
?>