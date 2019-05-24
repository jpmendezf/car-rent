<?php
//error_reporting(0);
$hostname = "localhost";
$username = "root";
$password = "";
$database = "unibent";

//Connect to MySQL
$db_conn = mysqli_connect($hostname,$username,$password) or die(mysqli_error());
mysqli_select_db($db_conn, $database) or die(mysqli_error());
