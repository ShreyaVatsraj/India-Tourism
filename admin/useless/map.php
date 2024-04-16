<?php

$connection = mysqli_connect('localhost', 'root', '', 'indiatourism');

$result = mysqli_query($connection, "SELECT * FROM `Districts`");
$paths = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($connection);

?>

<!DOCTYPE html>
<html lang=" en ">

<head>
    <meta charset=" UTF - 8 ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> India Tourism </title>
    <link rel="stylesheet" href="colormap.css">
</head>

<body>
    <div>
        <b> India Tourism</b>
    </div> <br>
    <div id="details-box"></div>
    <svg xmlns:mapsvg="http://mapsvg.com" xmlns:dc="http://purl.org/dc/elements/1.1/"
        xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
        xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" id="svg2"
        height="695.70178" width="611.85999" mapsvg:geoViewBox="68.184010 37.084109 97.418146 6.753659">
        <metadata id="metadata44">
            <rdf:RDF>
                <cc:Work rdf:about="">
                    <dc:format>image/svg+xml</dc:format>
                    <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                    <dc:title></dc:title>
                </cc:Work>
            </rdf:RDF>
        </metadata>
        <defs id="defs42" />
        <?php foreach ($paths as $path) { ?>
            <path 
                id="<?= $path['Tag'] ?>" 
                title="<?= $path['Name'] ?>"
                d="<?= $path['Path'] ?>"
                data-id="<?= $path['Id'] ?>"  />
        <?php } ?>
    </svg>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script>

        $(document).ready(function ()
        {
            var tooltipSpan = document.getElementById('details-box');

            document.addEventListener('mouseover', function (e) {
                if (e.target.tagName == 'path') {
                    var content = e.target.getAttribute("title");
                    document.getElementById("details-box").innerHTML = content;
                    document.getElementById("details-box").style.opacity = "100%";
                }
                else {
                    document.getElementById("details-box").style.opacity = "0%";
                }
            });

            window.onmousemove = function (e) {
                var x = e.clientX,
                    y = e.clientY;
                tooltipSpan.style.top = (y + 20) + 'px';
                tooltipSpan.style.left = (x) + 'px';
            };

            $("path").each(function (arg1, arg2)
            {
                $(arg2).click(function (e)
                {
                    let id = this.getAttribute('data-id');
                    let url = 'district.php?id=' + id;

                    window.location.href = url;
                });
            });
        });
    </script>
</body>
</html>