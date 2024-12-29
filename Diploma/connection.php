<?php

$servername='localhost';
$username='root';
$password='';
$db='student_manegment';
$con=mysqli_connect($servername,$username,$password,$db);

if (!$con) 
{
	die("connection failed". mysqli_connect_error($con));
}

?>