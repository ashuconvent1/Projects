<?php 
	
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wil";
$row ="";
$row_serach="";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM users WHERE email='".$_SESSION['email']."'";

$result = $conn-> query($sql);

if ($result->num_rows > 0) {
     $row = $result->fetch_assoc();
   //header('Location: http://localhost/will/landingPage.php');
   
}else {
	echo "<script>alert('Invalid Password');</script>";
}



?>
<html>
<head>

<style>
div.gallery {
  margin: 25px;
  border: 5px solid #ccc;
  float: left;
  width: 270px;
}

div.gallery:hover {
  border: 5px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
<style type="text/css">
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
}

body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
 

}

#contact {
     display: block;
    color: white;
    text-align: left;
    padding: 15px 17px;
    text-decoration: none;
}
/* ul li {
    width: 1px;
    margin: 10px;
    text-decoration: underline;
    font-size: 16px;
} */
ul {
 list-style-type: none;
 margin: 1px;
 padding: 1px;
 overflow: hidden;
 border: 2px solid #e7e7e8;
 background-color: #cab3e4;

 top: 0;
 width: 100%;
}

li {
 float: left;
 font-size: 16px;
/* border-right: 2px solid #151212;*/
}

/* Add a border to all( but not the last) list items */
li:last-child { 
 border-right: none;
}

li a {
 display: block;
 color: white;
 text-align: left;
 padding: 15px 17px;
 text-decoration: none;
}

/* Links will change color when hovered over */
li a:hover {
 background-color: #7300ff;
}

.active {
 background-color: #d61d1d;

</style>



</head>
<body style="background-image: url('http://localhost/will/main.jpg');  background-size: cover;" >

<div style="height:100px;background-color:#716969">
   <img src="logo.jpg" style="display: block;
  margin-left: auto;
  margin-right: auto;
  width: 26%;" ></img>


</div>

<div >
<div><ul>
<li><a href="http://localhost/will/mainpage.html" >Home</a></li>
 <li><a href="http://localhost/will/landingPage.php" >My profile</a></li>
  <li><a href="http://localhost/will/contact.php" >My gallary</a></li>
  <li><a href="http://localhost/will/about.php" >Messages</a></li>
 <li style="float: right;"><form id="contact" action="./api/user/signOut.php" method="post">
    
      <button name="submit" type="submit" id="contact-submit" >signOut</button>
   
	
    </form></li>
</ul></div>
  
  <h3 style= "margin-left: 40px;"> Welcome  : <?php echo $row["username"];?></h3>
  <h4 style= "margin-left: 40px;"> Your favourite Bike  : <?php echo $row["favBike"];?></h4>
  
  <form id="contact" action="" method="post">
       <input placeholder="Search User" value='' name = "search" required style="margin-left:30px" >
      <button name="submit" type="submit" id="contact-submit" >Search</button>
</form>
    <button  style="margin-left:60px;"><a href="https://www.facebook.com/">Facebook</a></button> 
	<button ><a href="http://www.Twitter.com/ridersconnect">Twitter</a></button>
	<button ><a href="http://www.ridersconnect.com">Google</a></button>
 
 




	
	
	
	<?php 
	if(isset($_POST['search'])  != '')
{
	
	
	 $sql_serach = "SELECT * FROM users WHERE username LIKE '".$_POST['search']."%'";
	"SELECT * FROM users WHERE gender LIKE '".$_POST['search']."%'";
	"SELECT * FROM users WHERE email LIKE '".$_POST['search']."%'";
	"SELECT * FROM users WHERE FavBike LIKE '".$_POST['search']."%'";
	"SELECT * FROM users WHERE dob bike LIKE '".$_POST['search']."%'";
	
	$result_serach = $conn-> query($sql_serach);
	if ($result_serach->num_rows > 0) {
		while($row_serach = $result_serach->fetch_assoc() ){
    
   //header('Location: http://localhost/will/landingPage.php');
	?>
	
  <div>
  <li><?php echo $row_serach['username'];  ?></li><br>
  <li><?php echo $row_serach['email'];  ?></li><br>
  <li><?php echo $row_serach['gender'];  ?></li><br>
   <li><?php echo $row_serach['dob'];  ?></li><br>
    <li><?php echo $row_serach['FavBike'];  ?></li><br>
  <?php 
  
  	}
}
else { ?>
	<div>
  <h1></h1>
  
  </div>
<?php }
}
?>  
 
  </ul>
</div>
<div style="float: left;background-color:#777; width:50%; background-repeat: no-repeat; background-size:cover;">
   
  
    </div>


</div>
</div>

 
 </div>
 <h2>My Videos</h2>
<div class="gallery">
  <a target="_blank" href="https://www.youtube.com/watch?v=-AaCpFSs2zk" >
    <img src="video.jpg" alt="video" width="100" height="100"   align="right" style="margin-left:40px">
  </a>
  
</div>   
<div class="gallery">
  <a target="_blank" href="https://www.youtube.com/watch?v=CabbjXq-2TA">
    <img src="sky.jpg" alt="sky" width="100" height="100"  align="right">
  </a>
</body>
</html>