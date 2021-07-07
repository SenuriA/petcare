<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styleindex.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300&display=swap" rel="stylesheet">
<style>
	a{
		color: white;
		text-decoration: none;
	}
</style>
</head>
<body>
	<header class="site-header">
		<nav>
			<div class="logo">
				<h1>Wolf Guardians Pet Care Center</h1>


			</div>
			<div class="menu">
				<ul>
					<li>Home</li>
					<li><a href="http://localhost/mywork/group_march/mylogin/about.php">About</a></li>
					<li><a href="http://localhost/mywork/group_march/mylogin/33.html">Services & Conditions</a></li>
					<li><a href="http://localhost/mywork/group_march/mylogin/Appoinment.php">
						Appoinment
					</a>
						
					</li>
				</ul>
				
			</div>
		</nav>
		<section>
			<div class="leftside">
				<img src="kkedited.png">
				
			</div>
			<div class="rightside">
				<h1>WOLF GUARDIANS PET CARE</h1>
				<p>only the best</p>
				<h4>FOR YOUR BEST FRIEND</h4>
				<button>welcome</button>
			</div>
		</section>
	</header>


</body>
</html>
<?php
$cookie_name="loggedin";
if (isset($_COOKIE[$cookie_name]))
{
	$cookie_value = $_COOKIE[$cookie_name];
	echo "Welcome to you personal are" . $cookie_value. " !";
	echo '<a href="logout.php">Logout</a>';

}
?>