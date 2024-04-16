   <div style="overflow: hidden;">
<?php
include('./includes/header.php');

$id = $_GET['id'];

$connection = mysqli_connect('localhost', 'root', '', 'indiatourism');

$stateInfoResult = mysqli_query($connection, "SELECT * FROM `stateinformation` WHERE StateId = " . $id);
$stateRecord = mysqli_fetch_assoc($stateInfoResult);
$stateContent = $stateRecord['FilePath'];

$stateImagesResult = mysqli_query($connection, "SELECT * FROM `StateImages` WHERE `StateId` = " . $id);
$stateImageRecords = mysqli_fetch_all($stateImagesResult, MYSQLI_ASSOC);

mysqli_close($connection);
?>
<div class="row">
    <div class="col">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($stateImageRecords as $stateImageRecord) { ?>
                <div class="carousel-item active">
                    <img src="./img/<?= $stateImageRecord['ImagePath'] ?>" class="d-block w-100" alt="..." style="height: 550px">
                </div>
                <?php } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">&nbsp;</div>
    <div class="row">
        <div class="col">
            <?= file_get_contents("admin/content/$stateContent"); ?>
        </div>
    </div>
    <div class="row">&nbsp;</div>
</div>
<?php include('./includes/scripts.php') ?>
<div style="background: rgb(42,72,108);height: 610px;width: 1400px;">
    <?php include('./includes/footer.php')?>
    <img src="./img/logo.png" style="height: 200px;width: 200px;box-shadow:10px 10px 10px rgb(27,45,67)">
    <h1 style="color:white;padding-left:250px;margin-top:-100px">Let's Explore India Together...</h1>
    <h3 style="color:white;font-size:20px;padding-left:1000px;margin-top:-100px">Developed By:</h3>
    <h4 style="color:white;font-size:15px;padding-left:1000px">Shreya Vatsraj +91 7567516754</h4>
    <h4 style="color:white;font-size:15px;padding-left:1000px">Safiya Dal +91 9624319655</h4>
    <h3 style="color:white;font-size:20px;padding-left:1000px">Managed By:</h3>
    <h4 style="color:white;font-size:15px;padding-left:1000px">Mr.Abdullah Bolim +91 9726246126</h4>
</div>

</div>