<?php include('header.php'); 
	include('serverSide.php');
?>
<section>
	<form method="post">
		<?php  include('errors.php');

			if (isset($_REQUEST['error'])) {
		 		?>
		 		<div class="error">
		 			<p>
		 				<?php echo "Wrong username or password"; ?> 
		 			</p>
		 		</div>
		 		<?php
		 	}

		?>
		
		<div id="regPart">
			<div class="reg">
				<span>Username:</span><br>
				
				<span>Password:</span><br>
			</div>  

			<div class="regIn">
				<input type="text" name="username"><br>
				<input type="password" name="password1"><br>	
				
			</div>
		</div>
		<input type="submit" name="loginButton" value="Log in"><br>

		
		<p>do not have account <a href="registrationPage.php">Sign up</a></p>

	</form>
</section>
<?php include('footer.php'); ?>