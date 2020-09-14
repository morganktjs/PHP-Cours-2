<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mon site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Mon site</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Accueil</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Liste des usagers</a>
              <a class="dropdown-item" href="#">Ajouter un usager</a>
              <a class="dropdown-item" href="#">Rechercher</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
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