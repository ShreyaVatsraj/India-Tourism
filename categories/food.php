<?php $id = $_GET['id'];

$connection = mysqli_connect('localhost', 'root', '', 'indiatourism');

$FoodResult = mysqli_query($connection, "SELECT * FROM `food` WHERE `StateId` = " . $id);
$FoodRecords = mysqli_fetch_all($FoodResult, MYSQLI_ASSOC);

// print_r($FoodRecords);
// exit();

mysqli_close($connection);
?>

<link rel="stylesheet" href="/indiatourism/css/page.css">

<div id="fairs" class="container tab-pane fade bg" style="overflow: hidden;">
    <br>
    <!-- First Box -->
    <div class="row align-items-center mb-70">
        <div class="col-sm-6 animate fadeIn animated" data-animate="fadeIn" data-duration="2s" data-delay="0.1s"
            style="animation-duration: 2s; animation-delay: 0.1s; visibility: visible;">
            <div class="culture-item">
                <div class="culture-dtails pl-100">
                <?php foreach ($FoodRecords as $stateDescriptionRecord) { ?>
                    <p style="color:white; font-weight:500;"> <?=$stateDescriptionRecord['Food1'] ?></p> 
                <?php } ?>          
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="culture-item">
            <div class="culture-img img">
               <?php foreach ($FoodRecords as $stateImageRecord) { ?>
                    <img src="./food/<?= $stateImageRecord['FoodImg1'] ?>" alt="..." />
                <?php } ?>
            </div>
            </div>
        </div>
    </div>
    <!-- First Box End -->

    <!-- Second Box -->
    <div class="row align-items-center mb-70 flex-row-reverse">
        <div class="col-sm-6 animate fadeIn animated" data-animate="fadeIn" data-duration="2s" data-delay="0.1s"
            style="animation-duration: 2s; animation-delay: 0.1s; visibility: visible;">
            <div class="culture-item">
                <div class="culture-dtails pl-100">
                <?php foreach ($FoodRecords as $stateDescriptionRecord) { ?>
                    <p style="color:white; font-weight:500;"> <?=$stateDescriptionRecord['Food2'] ?></p> 
                <?php } ?>          
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="culture-item">
            <div class="culture-img">
               <?php foreach ($FoodRecords as $stateImageRecord) { ?>
                    <img src="./food/<?= $stateImageRecord['FoodImg2'] ?>" alt="..."  />
                <?php } ?>
            </div>
            </div>
        </div>
    </div>
    <!-- Second Box End -->


    <!-- Third Box -->
    <div class="row align-items-center mb-70">
        <div class="col-sm-6 animate fadeIn animated" data-animate="fadeIn" data-duration="2s" data-delay="0.1s"
            style="animation-duration: 2s; animation-delay: 0.1s; visibility: visible;">
            <div class="culture-item">
                <div class="culture-dtails pl-100">
                <?php foreach ($FoodRecords as $stateDescriptionRecord) { ?>
                    <p style="color:white; font-weight:500;"> <?=$stateDescriptionRecord['Food3'] ?></p> 
                <?php } ?>          
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="culture-item">
            <div class="culture-img">
               <?php foreach ($FoodRecords as $stateImageRecord) { ?>
                    <img src="./food/<?= $stateImageRecord['FoodImg3'] ?>" alt="..."  />
                <?php } ?>
            </div>
            </div>
        </div>
    </div>
    <!-- Third Box End -->

    <!-- Fourth Box -->
    <div class="row align-items-center mb-70 flex-row-reverse">
        <div class="col-sm-6 animate fadeIn animated" data-animate="fadeIn" data-duration="2s" data-delay="0.1s"
            style="animation-duration: 2s; animation-delay: 0.1s; visibility: visible;">
            <div class="culture-item">
                <div class="culture-dtails pl-100">
                <?php foreach ($FoodRecords as $stateDescriptionRecord) { ?>
                    <p style="color:white; font-weight:500;"> <?=$stateDescriptionRecord['Food4'] ?></p> 
                <?php } ?>          
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="culture-item">
            <div class="culture-img">
               <?php foreach ($FoodRecords as $stateImageRecord) { ?>
                    <img src="./food/<?= $stateImageRecord['FoodImg4'] ?>" alt="..."  />
                <?php } ?>
            </div>
            </div>
        </div>
    </div>
    <!-- Fourth Box End -->

    <!-- Fifth Box -->
    <div class="row align-items-center mb-70">
        <div class="col-sm-6 animate fadeIn animated" data-animate="fadeIn" data-duration="2s" data-delay="0.1s"
            style="animation-duration: 2s; animation-delay: 0.1s; visibility: visible;">
            <div class="culture-item">
                <div class="culture-dtails pl-100">
                <?php foreach ($FoodRecords as $stateDescriptionRecord) { ?>
                    <p style="color:white; font-weight:500;"> <?=$stateDescriptionRecord['Food5'] ?></p> 
                <?php } ?>          
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="culture-item">
            <div class="culture-img">
               <?php foreach ($FoodRecords as $stateImageRecord) { ?>
                    <img src="./food/<?= $stateImageRecord['FoodImg5'] ?>" alt="..."  />
                <?php } ?>
            </div>
            </div>
        </div>
    </div>
    <!-- Fifth Box End -->