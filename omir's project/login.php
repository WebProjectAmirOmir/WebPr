<?php
	include("header.php");

	include('server.php');
	?>
	
	<section>
		
		<form method="post">
			<?php include("errors.php") ?>
			<?php 
				if (isset($_REQUEST['error'])) {
					?>
						<div class="errors">
							<p>Incorrect username or password</p>
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
				<td>Password</td>
				<td><input type="Password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit2" value="Login"></td>
			</tr>
			<tr>
				<td>
					<p><a href="signin.php">Sign up</a></p>
				</td>
			</tr>
		</table>
	</form>

	</section>


	<?php

	include("footer.php");


?>