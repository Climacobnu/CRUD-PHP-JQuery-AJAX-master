<?php

	global $con;

	$con = mysqli_connect('localhost','root','root','crudajax');

	if(!$con)
	{
		echo 'unable to connect with db';
		die();
	}