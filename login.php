<!DOCTYPE html>
<html>
<style>
body {font-family: Aroa;, Helvetica, snas-serif; width:500px;}
	* {box-sizing: border-box;}
	input[type=text], input[type=password] {
		width:100%;
		padding: 15px;
		margin: 5px 0 22px 0;
		display: inline-block;
		border: none;
		background: #f1f1f1;
		
	}
	input[type=text]:focus, input[type=passowrd]:focus {
		background-color: #ddd;
		outline: none;
	}
	hr {
		border: 1px solid #f1f1f1;
		margin-bottom: 25px;
	}
	
	button {
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 100%;
		opacity: 0.9;
	}
	button:hover {
		opacity:1
	}
	.signupbtn {
		float:left;
		width: 50%;
	}
	.container {
		padding: 16px;
		
	}
	.clearfix::after{
		content: "";
		clear: both;
		display: table;
	}
	@media screen and (max-width: 300px) {
		.cancelbtn, .signupbtn {
			width: 100%;
		}
	}
	</style>
	
<body>

<form action="/signup.php" method="POST" style="border:5px solid #ccc">
	<div class="container">
		<h1>Sign Up</h1>
		<p> Please fill in this form to create an account.</p>
		<hr>


		<label for "uname"><b>Username</b></label>
		<input type="text" placeholder="Enter a username" name="uname" required>

		<label for="email"><b>Email</b></label>
		<input type="text" placeholder="Enter an email" name="email" required>

		<label for="pword"><b>Password</b></label>
		<input type="text" placeholder="Enter a password" name="pword" required>
		
		<label for "psw-rep"><b>Repeat Password</b></label>
		<input type="text" placeholder="Repeat Password" name="psw-rep" required>

		<label>
		<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
		</label>
		
		<p>By creatting an account you agree to our <a href="#" style="color:dodgerblue"> Terms & Privacy</a>.</p>
		
		<div class="clearfix">
		<button type="submit" class="signupbtn">Sign Up</button>
	</div>
</div>
</form>

</body>
</html>
