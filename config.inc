<?php
$hostname='localhost';
$dbname='bloodbank';
$username='root';
$password='';

$con=mysqli_connect($hostname, $username, $password) or die('connection not successful');

mysqli_select_db($con,$dbname) or die ('not successful');

?>
