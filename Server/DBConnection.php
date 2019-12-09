<?php
//Database Connection Details
$Server = 'localhost';
$mysql_user = 'root';
$DB_Pass = '';
$DB_Name = 'online_exam';
// connect to database
$Con = mysqli_connect($Server, $mysql_user, $DB_Pass, $DB_Name);
// Check connection
if ($Con->connect_error) {
    die("Connection failed: " . $Con->connect_error);
}

?>