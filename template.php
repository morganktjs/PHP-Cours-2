<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mon site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">   
        <h1><?=$title?></h1>
        <?=$content?>
        <!--<div class="row">
            <div class="col col-6 col-md-2 col-lg-1">
            bout de texte
            </div>
            <div class="col col-4">
            allo
            </div>
            <div class="col col-4">
            cc
            </div>
        </div>-->
        <?php 
            require("includeJS.php")
        ?>
    </div>
</body>

</html>