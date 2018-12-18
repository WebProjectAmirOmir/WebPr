<?php
		$username="";
		$email="";
		$password="";
		$password2="";
		$errors=array();

		if (isset($_POST['submit'])) {
			if (isset($_POST['username'])) {
				$username=$_POST['username'];	
			}
			if (isset($_POST['email'])) {
				$email=$_POST['email'];	
			}
			if (isset($_POST['password'])) {
				$password=$_POST['password'];	
			}
			if (isset($_POST['password2'])) {
				$password2=$_POST['password2'];	
			}
			if (empty($username)) {
				array_push($errors, "Username is required");
			}if (empty($email)) {
				array_push($errors, "Email is required");
			}if (empty($password)) {
				array_push($errors, "Password is required");
			}if ($password != $password2) {
				array_push($errors, "The two passwords do not match");
			}
			if (count($errors)==0) {
				$sql="SELECT * FROM users where username='$username' and password='$password'";
				
				$result=mysqli_query($conn,$sql);
				if (mysqli_num_rows($result)>=1) {
					array_push($errors, "There already exists such kind of user");
					unset($_SESSION['success']);
					header("location:signin.php?error=exist");					
				}else{
					$sql="INSERT into users (username,email,password) VALUES ('$username','$email','$password')";
					mysqli_query($conn,$sql);
					$_SESSION['username']=$username;
					$_SESSION['success']='done';

					header("location:index.php");
				}
				
			}

		}
		if (isset($_POST['submit2'])) {
			if (isset($_POST['username'])) {
				$username=$_POST['username'];	
			}
			if (isset($_POST['password'])) {
				$password=$_POST['password'];	
			}
			if (empty($username)) {
				array_push($errors, "Username is required");
			}
			if (empty($password)) {
				array_push($errors, "Password is required");
			}
			if (count($errors)==0) {
				$sql="SELECT * FROM users where username='$username' and password='$password'";
				$result=mysqli_query($conn,$sql);
				if (mysqli_num_rows($result)==1) {
					$row=mysqli_fetch_assoc($result);
					$_SESSION["admin"]=$row['admin'];
					$_SESSION['username']=$username;
					$_SESSION['success']='done';
					header("location:index.php");
				}else{
					array_push($errors,"wrong username/password combination");
					unset($_SESSION['success']);
					header("location:login.php?error=var");


				}
			}
		}

		if (isset($_REQUEST['logout'])) {
			unset($_SESSION['success']);
			session_destroy();
			header("location:index.php");
		}
	?>