<?php 
	$username=""; 
	$email=""; 
	$password=""; 
	$password2=""; 
	$errors=array(); 
		if (isset($_POST['but'])) { 
			if (isset($_POST['username'])) { 
				$username=$_POST['username']; 
			} 
			if (isset($_POST['email'])) { 
				$email=$_POST['email']; 
			} 
			if (isset($_POST['password1'])) { 
				$password=$_POST['password1']; 
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
				$sql="SELECT * from users  where username = '$username' and password = '$password' ";
				$result = mysqli_query($conn,$sql); 
				
				if (mysqli_num_rows($result) >= 1) {
						unset($_SESSION['loggedIn']);
						header('location: registrationPage.php?error=var');
				}
				else{
					$sql="INSERT into users (`username`, `password`, `Email`) VALUES ('$username','$password','$email')";
					mysqli_query($conn,$sql); 
					$_SESSION['loggedIn'] = "true";
					header("location: newsPage.php");
				}
			}
		} 
		if (isset($_POST['loginButton'])) { 
			if (isset($_POST['username'])) { 
				$username=$_POST['username']; 
			}  
			if (isset($_POST['password1'])) { 
				$password=$_POST['password1']; 
			} 
			if (empty($username)) { 
				array_push($errors, "Username is required"); 
			}
			if (empty($password)) { 
				array_push($errors, "Password is required"); 
			}
			if (count($errors)==0) { 
				$sql="SELECT * from users  where username = '$username' and password = '$password' ";
				$result = mysqli_query($conn,$sql); 
				
				if (mysqli_num_rows($result) == 1) {
					$_SESSION['loggedIn'] = "true";
					$row = mysqli_fetch_assoc($result);
					$_SESSION['admin'] = $row['admin'];
					header("location: newsPage.php");					
				}else{
					header('location: loginPage.php?error=var');
				}
			} 
		} 

		if (isset($_REQUEST['logOut'])) {
			unset($_SESSION['loggedIn']);
			session_destroy();
			header('location: newsPage.php');
		}
?>