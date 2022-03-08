<?php

$email = $_POST['email'];
$password = $_POST['psw'];
$repeat = $_POST['psw-repeat'];

echo "email: " . $email . ",password: " . $password . ", repeat: " . $repeat; 

if (strlen($email) < 1 || strlen($email) > 100)
{
	if(strlen($email) <1)
		echo "Email length too short"; 
	else 
		echo "Email length too long"; 
	
	exit();
}
else if (strpos($email, '@') == false) 
{
	echo "Email syntax invalid";
	exit();
}
else if (strlen($password) < 8)
{
	echo "Password length too short!"; 
	exit(); 
} 
else if ($password !== $repeat)
{
	echo "Your passwords dont match"; 
	exit(); 
} 
$hash = password_hash($password, PASSWORD_DEFAULT);

$dbcreds = new mysqli('localhost', 'root', '', 'cw');

if ($stmt = $dbcreds -> prepare("INSERT INTO `users` (`email`, `password`) VALUES (?, ?)"))
{
	$stmt -> bind_param("ss", $email, $hash); 
	$stmt -> execute(); 
	
	if($stmt -> insert_id == 0) 
	{ 
       echo "Database error"; 
	   exit(); 
	} 
	$stmt -> close();
}

















?>
