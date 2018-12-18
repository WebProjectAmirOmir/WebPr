<?php
	include("header.php");

	include('server.php');

?>
	
	<section id="regSes">
		

		<form action="signin.php" method="post">
			<?php include("errors.php") ?>
			<?php 
				if (isset($_REQUEST['error'])) {
					?>
						<div class="errors">
							<p>There alreay exists such user</p>
						</div>
					<?php
				}
			?>
		<table cellspacing="1">
			<tr>
				<td>Username</td>
			<td><input type="text" name="username" value="<?php echo $username;?>"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="password"></td>
			</tr>
			<tr>
				<td>Confirm Password:</td>
				<td><input type="Password" name="password2"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Sign up"></td>
			</tr>
			<tr>
				<td><p>Alreay a member? <a href="login.php">Log in</a></p></td>
			</tr>
		</table>
	</form>

	</section>

	<script type="text/javascript">
		
	</script>	

	<?php 
	include("footer.php");
?>

















