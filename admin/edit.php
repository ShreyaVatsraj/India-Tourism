<?php

$file_path = './content/12.txt';
$content = '';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (file_exists($file_path))
        $content = file_get_contents($file_path);
} elseif (isset($_POST['content'])) {

    file_put_contents($file_path, $_POST['content']);
    exit();
}

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
                                    <button id="btn-submit" type="submit" class="btn btn-success">Create</button>
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
    <script src="./js/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                minHeight: 300,
                tabDisable: true,
                toolbar: [
                    ['style', ['style']],
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['para', ['ul', 'ol', 'paragraph', 'height']],
                    ['fontstyle', ['fontname', 'fontsize', 'fontsizeunit']],
                    ['fontstyle', ['color', 'forecolor', 'backcolor']],
                    ['insert', ['picture', 'link', 'video', 'table', 'hr']],
                    ['misc', ['fullscreen', 'undo', 'redo', 'help']]
                ]
            });
        });

        function saveContent() {
            $.ajax({
                method: 'POST',
                url: './edit.php',
                data: {
                    content: $('#summernote').summernote('code')
                },
                success: function(response) {
                    window.location.href = './index.php';
                },
                error: function(reason) {
                    console.log(reason);
                }
            });

            return false;
        }
    </script>
</body>

</html>