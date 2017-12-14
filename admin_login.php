<?php
echo "hello my name is hutesh";	
if($_GET["uid"]=="swarnkhabar" AND $_GET["password"]=="12345" )
{
$_SESSION["adminLogin"]=True;
}
else
{
  $_SESSION["adminLogin"]=False;
}

if($_SESSION["adminLogin"]==True)
{
echo " <br><a href="index.html"> Logout </a><br> ";
}
else 
{
echo "
<form action="adminLogin.php" method="GET">
User ID: <input type="text" name="uid" required><br>
Password: <input type="password" name="password" required><br>
<input type="submit">
</form>";
}

<br><a href="index.html">Go to Home Page!!!</a>
?>