<?php
$host = "localhost";
$user = "id1027806_rajaram";
$pass = "rajaram";

mysql_connect($host, $user, $pass);

mysql_select_db("id1027806_swarnkhabar");

$imagename=$_FILES["myimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO Images VALUES('',$imagename','$imagetmp')";

mysql_query($insert_image);

?>