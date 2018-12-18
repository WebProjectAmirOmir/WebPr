<?php
    	include('header.php');


?>

    <section>
    		<?php
				$sql = "SELECT * FROM typeofnews";
				$result = mysqli_query($conn,$sql);
				$num = mysqli_num_rows($result);
				for ($i=0; $i <$num; $i++) { 
					$row=mysqli_fetch_assoc($result);
				?>
    	    	<div class="card">
	    			<div class="type type<?=$i%3?>">
	    				<p><?= $row['type']?></p>
	    			</div>
	    			<div>
					<a href="index.php?type=<?=$row['type']?>">
		    			<img src="<?=$row['url']?>">
					</a>	    				
	    			</div>
	    			<?php
	    				if(isset($_SESSION['admin'])){
	    					$admin=$_SESSION['admin'];
	    					if ($admin==1) {
	    						?>
	    							<div><a href="index.php?deleteid=<?=$row['id']?>">delete</a></div>
	    						<?php
	    					}
	    				}
	    			?>
	    		</div>
    		<?php
			}

			if (isset($_REQUEST['deleteid'])) {
				$id=$_REQUEST['deleteid'];
				$sql="DELETE FROM typeofnews where id='$id'";
				mysqli_query($conn,$sql);
				header("location:index.php");
			}
			if (isset($_REQUEST['did'])) {
			$did=$_REQUEST['did'];
			$sql="DELETE FROM news where id='$did'";
			mysqli_query($conn,$sql);
			header("location:index.php");
		}

			?>
    </section>

    <?php
    	if (isset($_SESSION['admin'])) {
    		if ($_SESSION['admin']==1) {
    			?>
    				<a href="addtype.php">Add News Type</a><br>
    				<a href="addNews.php">Add News</a>
    				
    			<?php
    		}
    	}

    ?>

    <section>
    	<?php 
    	if (isset($_REQUEST['type'])) {
    		$var=$_REQUEST['type'];
    $sql="SELECT * from news where type='$var'";
    	}else{
			$sql = "SELECT * from news"; 
    	}
		$result = mysqli_query($conn, $sql); 
		$num = mysqli_num_rows($result); 
		$isSet=false;
		if (isset($_SESSION['admin'])) {
				$admin=$_SESSION['admin'];
				if ($admin==1) {
					$isSet=true;
				}
		}
		for ($i=0; $i <$num ; $i++) { 
		$row = mysqli_fetch_assoc($result); 
		?> 
		<div class="cardIns2">
			<a href="newsPage.php?id=<?=$row['id']?>">
				<div><img src="<?=$row["url"]?>"></div>
				<div class="title"><?=$row["title"]?></div>
				<div class="desc"><?=$row["description"]?></div>
			</a>
			<?php
				if ($isSet) {
					?>
					<div><a href="index.php?did=<?=$row['id']?>">delete</a></div>
				<?php	
				}
			?>
		</div>
		<?php 

	}
		 ?>

    </section>
    <?php
    	
    	include('footer.php');
    ?>
  