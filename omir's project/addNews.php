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
	<form action="addNews.php">
		<div id="inForm">
		<div id="names">
			<span>Image(URL)</span>
			<span>Title</span>
			<span>Description</span>
			<span>Type</span>
			<span>Content</span>
		</div>
		<div id="inputs">
			<input type="text" name="url">
			<input type="text" name="title">	
			<input type="text" name="desc">
			<input type="text" name="type">	
			<textarea type="text" name="content"></textarea> 			
		</div>
		</div>
		<input type="submit" name="but" value="clicked">
	</form>
	<a href="index.php">back</a>
	<?php
         $conn = mysqli_connect('localhost', 'root', "", 'mydb');
        if (isset($_REQUEST['but'])) {
        	$url=$_REQUEST['url'];
        	$title=$_REQUEST['title'];
        	$desc=$_REQUEST['desc'];
        	$type=$_REQUEST['type'];
        	$content=$_REQUEST['content'];
        	
        	$sql="INSERT INTO `news`(`url`,`title`,`description`,`type`,`content`) VALUES ('$url','$title','$desc','$type','$content')";
        	$result = mysqli_query($conn,$sql);
        }
    ?>
</body>
</html>