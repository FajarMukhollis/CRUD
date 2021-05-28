<?php
    //connect to database
    $server = "localhost";
	$user = "root";
	$pw = "";
	$database = "kampus";

	$conn = mysqli_connect($server, $user, $pw, $database)or die(mysqli_error($conn))

?>