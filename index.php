<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Site de recette</title>
</head>
<body>
  <?php
  $recipes = [
    ["title" => "Mousse au chocolat", "description" => "Découvrez cette recette de Crème au chocolat. Ces petites crèmes sont très faciles et super rapides à réaliser... Faites-en une fournée et vous ne les achèterez plus jamais toutes prêtes. En plus, pas besoin de four, ce qui permettra à vos chers bambins de vous donner un p'tit coup de main pour remuer et verser la crème dans les pots... Ils vont adorer.", "images" => "1-chocolate-au-mousse.jpg"],

    ["title" => "gratin dauphinois", "description" => "Ce gratin est un plat riche et réconfortant, idéal quand le paysage se couvre de neige. Les cèpes séchés sont ici utilisés en petite quantité, plus à la façon d'un assaisonnement. Ils apportent un parfum incomparable à un plat d'apparence toute simpl.", "images" => "2-gratin-dauphinois.jpg"],

    ["title" => "salade composée", "description" => "Laitue romaine, endive, feuille de chêne, mâche, scarole ou même pissenlit pour les plus connues, difficile de faire le tour des salades vertes quand on sait qu'il en existe environ 2000 variétés dans le monde ! Petites, grosses, frisées, vertes ou rougeâtres, aux saveurs poivrées comme la roquette ou amères comme le radicchio, il y en a pour tous les goûts. La salade, c'est notre amie pour la vie surtout lorsqu'elle accompagne une bonne tartiflette et qu'elle nous donne bonne conscience.", "images" => "3-salade.jpg"]
  ];
  
 
?>

<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
    </div>
  </header>

  <div class="ms-3  row flex-lg-row-reverse align-items-center g-5 py-5">

      <div class="col-6 col-sm-8 col-lg-6">
        <img src="./assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="350"  loading="lazy">
      </div>
      <div class=" col-lg-6  width: 1758px; ">
        <h1 class="display-5 fw-bold lh-1 mb-3">Cuisine Recette a votre porté</h1>
        <p class="lead">Bienvenue sur notre site dédié à la cuisine et aux recettes, où vous pouvez trouver des idées pour cuisiner facilement chez vous ! <br>Inspiration : il propose une variété de recettes pour diversifier son répertoire culinaire et trouver de nouvelles idées de plats à préparer.
Accessibilité : les recettes sont présentées de manière claire et détaillée, avec des instructions faciles à suivre, ce qui les rend accessibles aux débutants comme aux cuisiniers plus expérimentés.
Partage : les membres peuvent partager leurs propres recettes et échanger avec d'autres passionnés de cuisine, ce qui permet d'enrichir sa culture culinaire.
Actualité : le site propose des recettes de saison et des idées pour les fêtes et événements, permettant de rester à jour et de s'adapter aux circonstances.
Diversité : le site présente des recettes de différentes cultures culinaires, offrant ainsi la possibilité de découvrir de nouvelles saveurs et de s'ouvrir à des cuisines moins connues.  </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button><
        </div>
      </div>
    </div>

    <div class="row  flex-wrap d-flex justify-content-around ">
    
   <?php foreach ($recipes as $key => $recipe) {?>

    <div class="card col-4" style="width: 30rem;">
      <img src="./uploads/recipes/<?=$recipe["images"]?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?=$recipe["title"]?></h5>
        <p class="card-text"><?=$recipe["description"]?></p>
        <a href="#" class="btn btn-primary">Accédez à la recette</a>
      </div>
    </div>
    
    <?php } ?>

    </div>
  
  <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
    <div class="col mb-3">
      <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <p class="text-muted">© 2022</p>
    </div>

    <div class="col mb-3">

    </div>

    <div class="col mb-3">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
    </div>

    <div class="col mb-3">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
    </div>

    <div class="col mb-3">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
    </div>
  </footer>
</body>
</html>