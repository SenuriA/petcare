<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="stylereg.css">
	
</head>
<body>


  <div class="registration-form">
    <h1>Registration Form</h1>
    <form action="http://localhost/mywork/group_march/mylogin/coderegister.php" method="POST">
    	<p>User Name :</p>
    	<input type="text" name="username" placeholder="Type your user name">
    	<p>Email :</p>
    	<input type="text" name="email" placeholder="Enter a valid email">
    	<p>Password :</p>
    	<input type="password" name="password" placeholder="Password">
    	<input   type="submit" name="register" value="Register"/>
    	
   
    
    
  </div>

  <div class="container-signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>
</body>

</html>