<?php 
$server = 'localhost';
$user='root'; 
$pass=''; 
$database='astronomy'; 
$con=mysqli_connect($server,$user,$pass,$database);
mysqli_query($con,'set names "utf8"');

?>