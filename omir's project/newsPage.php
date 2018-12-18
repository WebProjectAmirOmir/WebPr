<?php 
	include("header.php");
	?>

	<section>
		

		 <?php

		 	if (isset($_REQUEST['id'])) {
		 		$id=$_REQUEST['id'];
		 		$sql = "SELECT * FROM news where id='$id'";
				$result = mysqli_query($conn,$sql);
				$num = mysqli_num_rows($result);
				$row=mysqli_fetch_assoc($result);
		 		
		 		?>
		 		<div class="block">
		 			<img src="<?=$row['url']?>">
		 			<div class="title">
		 				<h2><?=$row['title']?></h2>
		 			</div>
		 			<div class="content">
		 				<p><?=$row['content']?></p>
		 			</div>
		 		</div>

		 		<?php
		 	}
		?>
	</section>

<?php
	include("footer.php");
 ?>