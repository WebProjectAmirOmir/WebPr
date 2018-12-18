<?php 
    session_start();
    include('server.php');
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>News</title>
    <link rel="stylesheet" type="text/css" href="styleS.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:Condensed" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <?php
            header("Content-Type:: text/html;charset=utf-8");

            $conn = mysqli_connect('localhost', 'root', "", 'mydb');
                if(! $conn ){
                   die('Could not connect: ' . mysqli_error());
                }

        ?>
    
    
<header>
    	<nav>
    		<div id="logo">
    			<img src="news.png">
    		</div>
    <div id="links">
    	<li><a href="index.php" class="cool-link">Home</a></li>
    	<li><a href="#" class="cool-link">About</a></li>
    	<li><a href="#" class="cool-link">Contacts</a></li>	
    	<div id="logsin">
            <?php 
                if (isset($_SESSION['success'])) {?>
                    <li><a href="index.php?logout=true" class="cool-link">Log out</a></li>        
                <?php    
                }else{?>
                     <li><a href="login.php" class="cool-link">Log in</a></li>
            <?php
                }
             ?>
    		<li><a href="signin.php" class="cool-link">Sing up</a></li>
    	</div>
    </div>
    	</nav>
</header>
    
    <div id="main">
        