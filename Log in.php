<!DOCTYPE html> 
<html> 
<style> 
body {font-family: Arial, Helvetica, sans-serif;} 
form {border: 3px solid #f1f1f1; max-width:400px;} 
 
input[type=text], input[type=password] { 
    width: 100%; 
    padding: 12px 20px; 
    margin: 8px 0; 
    display: inline-block; 
    border: 1px solid #ccc; 
    box-sizing: border-box; 
} 
 
button { 
    background-color: #4CAF50; 
    color: white; 
    padding: 14px 20px; 
    margin: 8px 0; 
    border: none; 
    cursor: pointer; 
    width: 100%; 
} 
 
button:hover { 
    opacity: 0.8; 
} 
 
.cancelbtn { 
    width: auto; 
    padding: 10px 18px; 
    background-color: #f44336; 
} 
 
.imgcontainer { 
    text-align: center; 
    margin: 24px 0 12px 0; 
} 
 
 
 5118COMP SSD Page 15 of 15 
img.avatar { 
    width: 40%; 
    border-radius: 50%; 
} 
 
.container { 
    padding: 16px; 
} 
 
span.psw { 
    float: right; 
    padding-top: 16px; 
} 
 
/* Change styles for span and cancel button on extra small screens */ 
@media screen and (max-width: 300px) { 
    span.psw { 
       display: block; 
       float: none; 
    } 
    .cancelbtn { 
       width: 100%; 
    } 
} 
</style>

<body> 

<h2> Login Form</h2> 

<form action="/validateUser.php" method="POST">
<div class="imgcontainer">
 <img src="img_avatar2.png" alt="Avatar" class="avatar">
 </div> 
 
 <div class="container">
 <label for="email"><b>Email</b> </label> 
 <input type="text" placeholder="Enter Email Address" name="email" required>
 
 <label for="psw"><b>Password</b> </label> 
 <input type="psw" placeholder="Enter Password" name="psw" required>
 
 <button type="submit">Login</button> 
 <label> 
  <input type="checkbox" checked="checked" name="remeber"> Remember me
</label>
</div> 

 <div class="container" style="backgorund-color:#f1f1f1">
  <button type="button" class="cancelbtn"> Cancel </button> 
  <span class="psw"> Forgot <a href="#">password?</a></span>
  </div>
  </form> 
  <?php 
  
 $email = $_POST['email'];
 $password = $_POST['psw'];
 $repeat = $_POST['psw-repeat'];
 
 if (strlen($email) < 1 || strlen($email) > 100) 
 { 
    if(strlen($email) < 1) 
		echo "Email length is too short"; 
	else 
		echo "Email length too long"; 
	
	exit(); 
 }
 else if (strpos($email, '@') == false) 
 {
	 echo "Email syntax invalid"; 
	 exit(); 
 } 
 
 $dbcreds = new sqli('localhost', 'root', '', '6066COMP'); 
 if ($stmt = $dbcreds -> prepare("SELECT `id`, `password` FROM `users` WHERE BINARY `email` = ? LIMIT 1")) 
 {
$stmt -> bind_param("s", $email); 
$stmt -> execute(); 
$stmt -> bind_result($uid, $uhash);
$stmt -> store_result(); 

while ($stmt -> fetch())
{ 
if(password_verify($password, $uhash)) 
{ 
session_start(); 
$_SESSION['uemail'] = $email; 
$_SESSION['uid']= $uid; 

echo "logged in! - Session started fort user ID : " . $uid; 
} 
else 
{ 
echo "Wrong password"; 
}
}
$stmt -> close();
 }
 ?>
	
  
 