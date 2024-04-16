<?php
// error_reporting(0);

session_start();
if (!isset($_SESSION['USER']))
{
	header('Location: ./login.php');
	exit();
}

$msg = "";

$db = mysqli_connect("localhost", "root", "", "indiatourism");
// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$userId = $_SESSION['USER'];
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "../image/" . $filename;


	// Get all the submitted data from the form
	$sql = "INSERT INTO upload (filename, userid) VALUES ('$folder', $userId)";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Image Upload</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/test.css" />
</head>
<style>#title {
    text-align: center;
    margin-bottom: 60px;
    color:#ffa600;
    text-transform: uppercase;
    letter-spacing: 6px;
    font-family: 'eb_garamondsemibold';
    /* font-weight: 600; */
    font-size: 35px;
}
#bg{
	background-image: url('../img/india.png');
	margin-top: 100px;
}
</style>
<body id="bg">
<div style="overflow: hidden;">
	<div>
		<h4 id="title" style="font-size:300%">Share your experiences</h4>
		<form method="POST" action="" enctype="multipart/form-data">
			<div class="form-group" style="text-align:center">
				<input class="form-control" type="file" name="uploadfile" value="" />
			</div></br>
			<div class="form-group" style="text-align:center">
				<button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
			</div>
		</form>
	</div>
	
</div>
</body>

</html>

</html>
