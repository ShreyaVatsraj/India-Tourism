<?php

$id = $_GET['id'];

$file_path = "./content/$id.txt";
$content = '';

if (!file_exists($file_path))
    die('');    

$content = file_get_contents($file_path);

?>

<div class="card card-outline card-info">
    <div class="card-body">
        <div class="col col-md-12">
            <div id="summernote" class="state-data">
                <?= $content ?>
            </div>
        </div>
        <div class="card-footer">
            <a role="button" href="edit.php?id=<?= $id ?>" class="btn btn-success">Create/Edit</a>
        </div>
    </div>
</div>