<?php
$id = $_GET['id'];

$connection = mysqli_connect('localhost', 'root', '', 'indiatourism');

$result = mysqli_query($connection, "SELECT `filename` FROM `upload` WHERE `id` = $id");
$imageInfo = mysqli_fetch_assoc($result);
unlink("../image/" . $imageInfo['filename']);

mysqli_query($connection, "DELETE FROM upload WHERE id=$id ");
mysqli_close($connection);

header("Location:./upload.php");
?>