<?php
session_start();

$auth = $_SESSION['auth'] ?? null;

if(!$auth) { 
  header('Location:login.php');
  exit();
}

// контент для администратора

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Demo SPA</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Website Title</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
            <h2>Congratulation! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout.</h2>
			
		</div>
	</body>
</html>