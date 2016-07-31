<?php
    include_once '../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Starting Point</title>
    <link rel="stylesheet" href="public/lib/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h1 class="well">Starting Point to php project</h1>
                <p>
                    <?php $login = new App\Login\Login(); ?>
                </p>
            </div>
        </div>
    </div>


    <script src="public/lib/jquery/dist/jquery.min.js"></script>
    <script src="public/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="public/js/script.js"></script>
</body>
</html>