	<?php include('header.php'); ?>
		<section>
				<?php
					$sql = "SELECT * from typeofnews";
					$result = mysqli_query($conn, $sql);
					$num = mysqli_num_rows($result);
				
				for ($i=0; $i < $num; $i++) { 
					$row = mysqli_fetch_assoc($result);
					?>
					<div class="card">
						<div class="type type<?=$i%3?>">
							<p> <?= $row['type']?> </p>
						</div>
						<div class="Img">
							<a href="newsPage.php?type=<?= $row['type']?>">
							   <img src="<?= $row["url"] ?>">
							</a>
						</div>

						<?php 
							if (isset($_SESSION['admin']) && ($_SESSION['admin']==1)) {
								?>
								<div class="delete">
									
									<a href="newsPage.php?DeleteById=<?=$row['id']?>">
										<span>delete</span>	
									</a>

								</div>
								
								<?php
							}
						?>
						
					</div>
				
				<?php
				}

				if (isset($_REQUEST['DeleteById'])) {
					$d = $_REQUEST['DeleteById'];
					$sql = "DELETE FROM typeofnews WHERE id = '$d'";
					$result = mysqli_query($conn,$sql);
					header('location: newsPage.php');
				}
				if (isset($_REQUEST['DeleteNewsById'])) {
					$d = $_REQUEST['DeleteNewsById'];
					$sql = "DELETE FROM news WHERE id = '$d'";
					$result = mysqli_query($conn,$sql);
					header('location: newsPage.php');
				}

				if (isset($_SESSION['admin']) && ($_SESSION['admin']==1)) {
				?>	
				
				<div class="card">
						<div class="type">
							<p><a href="addNewsType.php">Add News Type</a></p>
						</div>	
				</div>
				<?php } ?>
				

		</section>

		<section>
			<?php 

			$sql = "SELECT * from news";
			if (isset($_REQUEST['type'])) {
				$type = $_REQUEST['type'];
				$sql = "SELECT * from news where type = '$type'";
			}
			$result = mysqli_query($conn, $sql);
			$num = mysqli_num_rows($result);
			for ($i=0; $i <$num ; $i++) { 
					$row = mysqli_fetch_assoc($result);
			 ?>
			<div class="deepCard">
				
				<a href="listNews.php?id=<?= $row['id'] ?>" class="cardA">	
					<div class="deepImg">
						<img src="<?= $row['url'] ?>">
					</div>
					
					<div class="title">
						<span><?= $row['title'] ?></span>
					</div>

					<div class="desc">
						<span> <?= $row['description'] ?> </span>
					</div>
				</a>

				<?php 
						if (isset($_SESSION['admin']) && ($_SESSION['admin']==1)) {
							?>
							<div class="deleteNews">	
								<a href="newsPage.php?DeleteNewsById=<?=$row['id']?>">
									<span>delete news</span>	
								</a>

							</div>
								
							<?php
						}
				?>

			</div>
			<?php 
				}
			
			if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
			?>	
			<div class="deepCard">
				<div class="title">
					<a href="addNews.php">Add news</a>
				</div>
			</div>

			<?php } ?>
			
		</section>
		
	<?php include('footer.php'); ?>
