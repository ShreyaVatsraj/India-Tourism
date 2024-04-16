<html>
    <head>
        <title>Parallax Effects</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <style>
        a:hover {
            color: rgb(255, 119, 0);
         }
        .button {
            background-color: #f4511e;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
         }

.button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
        </style>
    <body>
        <section>
            <video id="video" style="height: 100%; width:100%"  src="./img/parallax/video.mp4" autoplay muted loop></video>
            <div class="row">
                <div class="col-md-6">
                    <div id="travelxp" style="background-image:url( ./img/s.jpg);background-size:cover; margin-top:300px; margin-left: 90px; padding: 50px; border-radius: 10px; height:600px; width:650px">
                        <h2 style="color:#ffa600">Travel Experiences</h2>
                        <p>Share your travel experiences...</p>
                        <button type="button" class="button" style="margin-top:400px; margin-left: 150px;">
                        <a href="./includes/login.php" style="color: white;">Login</a>
                        <button type="button" class="button" style="margin-top:400px;">
                        <a href="./includes/register.php"style="color: white;">Register</a>
                    </div>
                </div>
            </div>
            <!-- <video id="video" style="height: 100%; width:100%"  src="./img/parallax/video.mp4"></video> -->
        </section>
        <script type="text/javascript">
           
            let video = document.getElementById("video");

            window.addEventListener('scroll', function(){
            var value = window.scrollY;
          
            video.style.top= value * 1 +'px';              
            })
        </script>
    </body>
</html>