<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "perpus";

$login = mysqli_connect ($host, $user, $pass);
$select_db = mysqli_select_db ($login, $db);

/* if($login && $select_db)
{
	echo "<center>Connected</center> <br>";
}
else
{
	echo "<center>Disconected</center><br>";
} */
?>