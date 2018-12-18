<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#main{
			display: flex;
			flex-wrap: wrap;
		}
		#card{
			display: flex;
			flex-direction: column;
		}
		#names{
			display: flex;
			flex-direction: column;
		}
		#names span{
			margin-bottom: 5px;
		}
		#inputs input{
			margin-bottom: 2px;
		}
		#inputs{
			display: flex;
			flex-direction: column;
		}
		#inForm{
			display: flex;
		}
	</style>
</head>
<body>
	<form action="addtype.php">
		<div id="inForm">
		<div id="names">
			<span>Type</span>
			<span>Image(URL)</span>
		</div>
		<div id="inputs">
			<input type="text" name="type">
			<input type="text" name="url">			
		</div>
		</div>
		<input type="submit" name="but" value="clicked">
	</form>
	<a href="index.php">back</a>
	<?php
         $conn = mysqli_connect('localhost', 'root', "", 'mydb');
        if (isset($_REQUEST['but'])) {
        	$type=$_REQUEST['type'];
        	$url=$_REQUEST['url'];
        	$sql="INSERT INTO `typeofnews`(`type`, `url`) VALUES ('$type','$url')";
        	
        	$result = mysqli_query($conn,$sql);
        }
    ?>
</body>
</html>