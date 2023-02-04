<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];



if ($username == "nakah" && $password == "nakah"){$_SESSION['username'] = $username;
	header("location: login.php");
}else{
	header("location: admin.php");
}
    
?>