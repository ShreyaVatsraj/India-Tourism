<?php

$connection = mysqli_connect('localhost', 'root', '', 'indiatourism');

$result = mysqli_query($connection, "SELECT * FROM `States`");
$paths = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($connection);

?>

<div id="details-box"></div>
<div id="map">
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
                data-id="<?= $path['Id'] ?>"
                id="<?= $path['Tag'] ?>" 
                title="<?= $path['Name'] ?>"
                d="<?= $path['Path'] ?>"  />
        <?php } ?>
    </svg>
</div>
<script>
    loadMap();
</script>