<?php include('header.php');
	include('serverSide.php');

 ?>

<section id="regSec">
	
	<form method="post" action="registrationPage.php">
		
		<?php 
			include("errors.php");
		 	if (isset($_REQUEST['error'])) {
		 		?>
		 		<div class="error">
		 			<p>
		 				<?php echo "There is already such account"; ?> 
		 			</p>
		 		</div>
		 		<?php
		 	}
		 ?>

		<div id="regPart">
			<div class="reg">
				<span>User Name:</span><br>
				<span>E-mail:</span><br>
				
				<span>Password1:</span><br>
				<span>Password2:</span><br>
								

			</div>  

			<div class="regIn">
				<input type="text" name="username" value="<?php echo $username; ?>"><br>
				<input type="text" name="email" value="<?php  echo $email; ?>"><br>
								
				<input type="password" name="password1"><br>	
				<input type="password" name="password2"><br>	
				
			</div>
		</div>
		<input type="submit" name="but" value="Sign Up"><br>

		<p>Already have account <a href="loginPage.php">Log in</a></p>
	</form>
	

	 
		

</section>



<?php include('footer.php'); ?>