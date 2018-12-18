<?php
session_start();

include('serverSide.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="indexC.css">
	<script type="text/javascript" src="newPageJs.js" defer></script>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:Condensed" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="script.js" defer></script>
</head>
<body>
	<?php 
		$conn = mysqli_connect('localhost', 'root', "", "webprojectdb");
	?>
	<header>
			<nav>
			<div id="logo">
				<img src="newsIcon2.png">
			</div>

			<div id="links">
				<li><a href="http://localhost/webProject/newsPage.php" class="linksA">Home</a></li>
				<li><a href="#" class="linksA">About</a></li>
				<li><a href="#" class="linksA">Contacts</a></li>


				<div id="auth">
					<?php 
					if (isset($_SESSION['loggedIn'] )) {
					?>
						<li><a href="newsPage.php?logOut='true" class="log">Log out</a></li>	

					<?php
					}
					else{
					?>
						<li><a href="loginPage.php" class="log">Log In</a></li>

					<?php
					} 
					?>

					<li><a href="registrationPage.php" class="sign">Sign up</a></li>

				</div>
			

	</header>

	<div id="middle">
	