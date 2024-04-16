<?php $id = $_GET['id'];

$connection = mysqli_connect('localhost', 'root', '', 'indiatourism');

$festivalResult = mysqli_query($connection, "SELECT * FROM `festival` WHERE `StateId` = " . $id);
$festivalRecords = mysqli_fetch_all($festivalResult, MYSQLI_ASSOC);

// print_r($festivalRecords);
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
                <?php foreach ($festivalRecords as $stateDescriptionRecord) { ?>
                    <p style="color:white; font-weight:500;"> <?=$stateDescriptionRecord['Festival1'] ?></p> 
                <?php } ?>          
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="culture-item">
            <div class="culture-img">
               <?php foreach ($festivalRecords as $stateImageRecord) { ?>
                    <img src="./festival/<?= $stateImageRecord['FestivalImg1'] ?>" alt="..."  />
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
                <?php foreach ($festivalRecords as $stateDescriptionRecord) { ?>
                    <p style="color:white; font-weight:500;"> <?=$stateDescriptionRecord['Festival2'] ?></p> 
                <?php } ?>          
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="culture-item">
            <div class="culture-img">
               <?php foreach ($festivalRecords as $stateImageRecord) { ?>
                    <img src="./festival/<?= $stateImageRecord['FestivalImg2'] ?>" alt="..."  />
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
                <?php foreach ($festivalRecords as $stateDescriptionRecord) { ?>
                    <p style="color:white; font-weight:500;"> <?=$stateDescriptionRecord['Festival3'] ?></p> 
                <?php } ?>          
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="culture-item">
            <div class="culture-img">
               <?php foreach ($festivalRecords as $stateImageRecord) { ?>
                    <img src="./festival/<?= $stateImageRecord['FestivalImg3'] ?>" alt="..."  />
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
                <?php foreach ($festivalRecords as $stateDescriptionRecord) { ?>
                    <p style="color:white; font-weight:500;"> <?=$stateDescriptionRecord['Festival4'] ?></p> 
                <?php } ?>          
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="culture-item">
            <div class="culture-img">
               <?php foreach ($festivalRecords as $stateImageRecord) { ?>
                    <img src="./festival/<?= $stateImageRecord['FestivalImg4'] ?>" alt="..."  />
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
                <?php foreach ($festivalRecords as $stateDescriptionRecord) { ?>
                    <p style="color:white; font-weight:500;"> <?=$stateDescriptionRecord['Festival5'] ?></p> 
                <?php } ?>          
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="culture-item">
            <div class="culture-img">
               <?php foreach ($festivalRecords as $stateImageRecord) { ?>
                    <img src="./festival/<?= $stateImageRecord['FestivalImg5'] ?>" alt="..."  />
                <?php } ?>
            </div>
            </div>
        </div>
    </div>
    <!-- Fifth Box End -->

