<?php
//error_reporting(0);
$hostname = "localhost";
$username = "root";
$password = "";
$database = "unibent";

//Connect to MySQL
$db_conn = mysqli_connect($hostname,$username,$password) or die(mysqli_error());
mysqli_select_db($db_conn, $database) or die(mysqli_error());


//Site Configuration Request
$site_config = mysqli_fetch_array(mysqli_query($db_conn, "SELECT * FROM site_config"));
