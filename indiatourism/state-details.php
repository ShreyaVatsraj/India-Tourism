<?php include('./includes/header.php') ?>
<?php
    $connection = mysqli_connect('localhost', 'root', '', 'indiatourism');

    $result = mysqli_query($connection, "SELECT * FROM `States` WHERE Id = " . $_GET['id']);
    $record = mysqli_fetch_assoc($result);

    $stateName = $record['Name'];
    $stateDescription = $record['Description'];

    mysqli_close($connection);
?>
<div class="details" >
    <div class="row">
        <div class="col text-center">
            <a href="state.php?id=<?= $record['Id'] ?>" style="text-decoration: none">
                <h1 style="color:rgb(253, 158, 33); overflow-y:hidden;"> <?= $record['Name'] ?></h1>
            </a> 
            <p style="color:#021849; font-weight:500;"> <?= $record['Description'] ?></p>
        </div>
    </div>
</div>
<?php include('./categories.php') ?>
<?php include('./includes/scripts.php') ?>