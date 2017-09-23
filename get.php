<?php
mysql_connect("localhost","rajaram","rajaram") or die(mysql_error());

mysql_select_db("id1027806_swarnkhabar") or die(mysql_error());

$id=addslashes($_REQUEST('id'));
$image=mysql_query("SELECT * FROM table where id=$id");
$image=mysql_fetch_assoc($image);
$image=$image('image');

header("Content-type:image/jpeg");
echo $image;
?>