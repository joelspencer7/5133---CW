<!DOCTYPE html>
<html>
<style>
body {font-family: Brush Script MT;}
* {box-sizing: border-box}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 10px 0 20px 0;
  display: inline-block;
  border: none;
  background: #ffffff;
  
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
  
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

button {
  background-color: #44ff1f;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 1;
}

button:hover {
  opacity:1;
}

.cancelbtn {
  padding: 14px 20px;
  background-color: #eb0000;
}

.signupbtn, .cancelbtn {
  float: center;
  width: 10%;
}

.container {
  padding: 60px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

@media screen and (max-width: 300px) {
  .signupbtn, .cancelbtn {
     width: 100%;
  }
}
</style>
<body>
<body style="background-color:#D3D3D3;">
<form action="/signup.php" style="border:1px solid #ffffff">
  <div class="container">
    <h1>Sign Up!</h1>
    <p>Please fill in this form to register with us!</p>
    <hr>

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter a suitable username" name="uname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter your email" name="email" required>

    <label for="pword"><b>Password</b></label>
    <input type="text" placeholder="Enter a password" name="pword" required>
    
    <label for="pwordrpt"><b>Repeat Password</b></label>
    <input type="text" placeholder="Repeat password" name="pwordrpt" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:10px">Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:#eb0000">Terms & Conditions</a>.</p>

    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Up</button>
      <button type="button" class="cancelbtn">Cancel</button>
    </div>
  </div>
</form>

</body>
</html>
