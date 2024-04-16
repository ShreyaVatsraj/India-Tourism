<?php

$connection = mysqli_connect('localhost', 'root', '', 'indiatourism');
$stateImagesResult = mysqli_query($connection, "SELECT `upload`.`id`, `upload`.`filename`, `register`.`username` FROM `upload` INNER JOIN `register` ON `upload`.`userid` = `register`.`id`");
$festivalRecords = mysqli_fetch_all($stateImagesResult, MYSQLI_ASSOC);

mysqli_close($connection);
?>

<style>
  /* .grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 20px;
    align-items: stretch;
    justify-items: center;
  }

  .grid img {
    border: 1px solid #ccc;
    box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.3);
    max-width: 100%;
  } */

  #title {
    text-align: center;
    margin-bottom: 60px;
    color:#ffa600;
    text-transform: uppercase;
    letter-spacing: 6px;
    font-family: 'eb_garamondsemibold';
    /* font-weight: 600; */
    font-size: 35px;
}
  #gallery {
    /* background-color:#ff730179 ; */
    height: 800px;
}

  #gallery img {
    max-width: 70%;
  }
</style>
<div id="gallery" style="background-image:url( ./img/visual-gallery.jpg);background-size: cover">
  <div class="container" id="photos">
  <h2 id="title" style="font-size:400%">Featured</h2>
    <div class="row">
      <?php foreach ($festivalRecords as $stateImageRecord) { ?>
      <div class="col col-lg-4 col-md-6 col-sm-6">
                    <img src="./image/<?= $stateImageRecord['filename'] ?>" alt="..."  />
                    <h3>Captured By:<?= $stateImageRecord['username'] ?></h3>
                  </div>
                  <?php } ?>  
    </div>
  </div>
</div>