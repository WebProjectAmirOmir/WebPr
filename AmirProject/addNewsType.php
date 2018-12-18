<?php 

if (isset($_REQUEST["subBut"]) && isset($_REQUEST["url"]) && isset($_REQUEST["type"])) {
	
	$type = $_REQUEST["type"];
	$url = $_REQUEST["url"];

	$conn = mysqli_connect('localhost', 'root', "", "webprojectdb");
	$sql="INSERT into typeofnews (`type`, `url`) VALUES ('$type','$url')";
	mysqli_query($conn,$sql); 
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<form>
		<input type="text" name="type"><br>
		<input type="text" name="url">
		<input type="submit" name="subBut">
	</form>
	<a href="newsPage.php">Back</a>

</body>
</html>