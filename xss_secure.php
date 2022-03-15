<!DOCTYPE html>
<?php
session_start();


echo "session ID = " . session_id() . "<br>";


if (isset($_REQUEST['logout']) && isset($_SESSION['active'])) {
	unset($_SESSION['active']);
	session_destroy();
}

if(isset($_SESSION['active'])) {
		var_dump($SESSION);
		
		echo "<h1>Hello " . $_SESSION['firstName'] . " " . $_SESSION['lastName'] . "</h1>";
		echo "you are logged in as " . $_SESSION['userName'] . "<br>";
		echo "<a href='?logout'> Logout </a?";
		
		return;
}

if(isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
	$userName = 'ADMIN';
	$passHash = sha1('adminPassword');
	$firstName = 'admin';
	$lastName = 'admin_';
	
	
	if($_REQUEST['username'] === $userName && $_REQUEST['password'] === $passHash) {
		$_SESSION['userName'] = $userName;
		$_SESSION['firstName'] = $firstName;
		$_SESSION['lastName'] = $lastName;
		$_SESSION['active'] =true;
		
		var_dump($_SESSION);
		
		echo "<h1>Hello " . $_SESSION['firstName'] . " " . $_SESSION['lastName'] . "</h1>";
	}
}
?>
<html>
	<h1>Login</h1>
	<body>
	
		<form method="POST">
			<input type="text" name="username">
			<input type="password" name="password">
			<input type="submit" value="Submit Now">
			</form>			
	</body>
</html>
