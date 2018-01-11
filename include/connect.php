<?php

$db_host = "localhost";
$db_user = "coffie";
$db_pass = "abc123";
$db_name = "ngo";



$conn = mysqli_connect ('localhost','coffie','abc123','ngo');

if(!$conn){
	
	echo"<script> alert('Database Erroor ')    </script>";
}




?>