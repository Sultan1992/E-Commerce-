<?php
	$conn = new mysqli("localhost","lenjiso","","cart_system");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}