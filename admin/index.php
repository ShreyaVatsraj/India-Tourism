<?php

$file_path = './content/12.txt';
$content = '';

if (file_exists($file_path))
    $content = file_get_contents($file_path)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/summernote-bs4.min.css">
</head>

<body>
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col col-md-12">
                    <form onsubmit="return saveContent();">
                        <div class="card card-outline card-info">
                            <div class="card-body">
                                <div class="col col-md-12">
                                    <div id="summernote">
                                        <?= $content ?>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a role="button" href="edit.php" class="btn btn-success">Create/Edit</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>