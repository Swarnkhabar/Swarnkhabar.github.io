<?php
$servername = "localhost";
$username = "id1374556_suman";
$password = "229suman";
$dbname = "id1374556_results";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
echo "Connected successfully";
$userid = $_REQUEST["userid"];
$pas = $_REQUEST["pass"];

$sql = "select * from users where user_id='$userid' and password='$pas'";
$result = $conn->query($sql);
if($result->num_rows > 0){
	echo "login sucessful";
	$row=$result->fetch_assoc();
	if($row["type"]==1){
		header('Location:admin.php');
	}
	else{
		header('Location:student.php?roll='.$userid);
	}
}
else{
	echo "login failed";
}

?> 
 <?php mysqli_close($conn); ?>