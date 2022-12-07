<?php 
$conn = mysqli_connect("localhost", "root", "72340aikido", "board") 
or die(mysqli_error()); 
if (!$conn) { die("Connection failed: " . mysqli_connect_error()); } 

?>