<div style="overflow: hidden;">
    <?php include('./includes/header.php') ?>
<video id="bg-vid" src="./videos/1.mp4" autoplay muted loop></video> 
<!-- <video id="bg-vid" src="./videos/1.mp4"></video>  -->
<nav class="navbar navbar-dark navbar-expand-lg bg-transparent">
    <div class="container-fluid pullUp">
        <a class="navbar-brand" href="#">
            <img src="./img/logo.png" style="height: 150px;width: 150px; margin-top:-12px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item animated">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown animated">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Explore
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#heritage">Heritage</a></li>
                        <li><a class="dropdown-item" href="#heritage">Forests</a></li>
                        <li><a class="dropdown-item" href="#heritage">Wildlife</a></li>
                        <li><a class="dropdown-item" href="#heritage">Beaches</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown animated">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Media
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#photos">Photos</a></li>
                        <li><a class="dropdown-item" href="#photos">Videos</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#travelxp">Travel experiences</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search" action="search.php">
                <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search" >
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <a href="./includes/admin.php">
            <img class="animated" src="./img/admin.png"/>
            </a>
        </div>
    </div>
</nav>
<?php include('./includes/scripts.php') ?>
<div id="bg" class="row g=0" style="margin: top 3px;background-image:url( ./img/visual-gallery.jpg);background-size: cover">
    <div id="mapbg" class="col col-lg-6 col-md-12" style="padding-left: 3rem; padding-top: 3rem">
        <?php include('./includes/map.php')?>
    </div>
    <div class="col col-lg-6 col-md-12" id="state-data" >
        
    </div>
</div>
<?php include('./includes/parallax.php')?>

<div style="margin-top: 50%">

<?php include('./includes/explore.php')?>

</div>

<div>

<?php include('./includes/gallery.php')?>

</div>
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
