<?php include('./includes/header.php') ?>
<div class="slider">
<div class="owl-carousel owl-theme">
    <div class="container">
        <img src="img/img/food2.jpg" style="border-radius: 15px; width: 213px; height: 180px;" alt="food" >
        <a href="./categories/food.php?id=<?= $record['Id']?>"><div class="overlay text">Food</div></a>
    </div>
    <div class="container">
        <img src="img/img/famous3.jpg" style="border-radius: 15px; width: 213px; height: 180px;" alt="famousplaces">
        <a href="./categories/place.php?id=<?= $record['Id']?>"><div class="overlay text">Famous Places</div></a>
    </div>
    <div class="container">
        <img src="img/img/festivals.jpg" style="border-radius: 15px; width: 213px; height: 180px;" alt="festivals">
        <a href="./categories/festival.php?id=<?= $record['Id']?>"><div class="overlay text">Festivals</div></a>
    </div>
</div>
</div>

<?php include('./includes/scripts.php') ?>
<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:20,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            },
            autoplay: true,
            autoplayTimeout: 2500,
            autoplayHoverPause: true
        });
    });
</script>

