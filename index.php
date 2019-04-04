<?php  session_start(); if(isset($_POST['email']))
	
	{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wil";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM users WHERE email='".$_POST['email']."' AND password ='".$_POST['password']."' ";
$result = $conn-> query($sql);

if ($result->num_rows > 0) {
     $row = $result->fetch_assoc();
  $_SESSION ["email"] = $row['email'];
   header('Location: http://localhost/will/landingPage.php');
   
}else {
	echo "<script>alert('Invalid Password');</script>";
}


	}

?>

<html>
<head>

<head>

<title>Wil Project</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body style="background-image: url('1.jpg');  background-repeat: no-repeat; background-size:cover; ">

<div style="height:100px;background-color:#716969">
   <img src="logo.jpg" style="display: block;
  margin-left: auto;
  margin-right: auto;
  width: 26%;" ></img>

<div class="container">  


<div >
  <form id="contact"  method="post">
    <h3>User Login Form</h3>
     
   
    <fieldset>
      <input placeholder="User Email Address" name = "email" type="email"  required>
   
      <input placeholder="User Password" name = "password" type="password"  required>
    
      <button name="submit" type="submit" id="contact-submit" >Submit</button>
    </fieldset>
	<p>Create New  account? <a href="/will/SignUp.html">SignUp</a></p>
    </form>
	
</div>



</body>
</html>