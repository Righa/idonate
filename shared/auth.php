<?php 

include('../auth/server.php');

function is_auth()
{
	if (isset($_SESSION['uid']))
		return true;
	else
		return false;
}






 ?>