<?php 
include "login.php";

function checkey($Q) {
	$yes = mysqli_query ($login, $Q);

	if (mysqli_num_rows($yes) > 0) {
		return true;
	}
	else {
		return false;
	}
}

?>