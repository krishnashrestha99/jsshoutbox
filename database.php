<?php

	// Conect to mysql
	$con = mysqli_connect("localhost", "root", "1221abba", "jsshoutbox");

	if(mysqli_connect_errno())
	{
		echo "Failed to connect:". mysqli_connect_error();
	}

 ?>
