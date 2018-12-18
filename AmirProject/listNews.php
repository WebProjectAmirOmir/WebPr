<?php include('header.php'); ?>


<section>

<?php 
	if (isset($_REQUEST)) {
		$id = $_REQUEST['id'];
		$sql = "SELECT * from news where id = '$id'";
		$result = mysqli_query($conn,$sql);
		 
		$row = mysqli_fetch_assoc($result);
		?>
		
		<div class="newsImg"> 
			<img src="<?=$row['url']?>">
		</div>

		<div class="content">
			<h2><?= $row['title'] ?></h2>
			<p>
				<?= $row['content'] ?>
			</p>
		</div>

		<?php

	}

?>

</section>



<?php include('footer.php') ?>