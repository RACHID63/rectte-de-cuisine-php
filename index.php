<?php

$recipes = [
  ["title" => "Mousse au chocolat", "description" => "Découvrez cette recette de Crème au chocolat. Ces petites crèmes sont très faciles et super rapides à réaliser... Faites-en une fournée et vous ne les achèterez plus jamais toutes prêtes. En plus, pas besoin de four, ce qui permettra à vos chers bambins de vous donner un p'tit coup de main pour remuer et verser la crème dans les pots... Ils vont adorer.", "images" => "1-chocolate-au-mousse.jpg"],

  ["title" => "gratin dauphinois", "description" => "Ce gratin est un plat riche et réconfortant, idéal quand le paysage se couvre de neige. Les cèpes séchés sont ici utilisés en petite quantité, plus à la façon d'un assaisonnement. Ils apportent un parfum incomparable à un plat d'apparence toute simpl.", "images" => "2-gratin-dauphinois.jpg"],

  ["title" => "salade composée", "description" => "Laitue romaine, endive, feuille de chêne, mâche, scarole ou même pissenlit pour les plus connues, difficile de faire le tour des salades vertes quand on sait qu'il en existe environ 2000 variétés dans le monde ! Petites, grosses, frisées, vertes ou rougeâtres, aux saveurs poivrées comme la roquette ou amères comme le radicchio, il y en a pour tous les goûts. La salade, c'est notre amie pour la vie surtout lorsqu'elle accompagne une bonne tartiflette et qu'elle nous donne bonne conscience.", "images" => "3-salade.jpg"]
];

require("Templates/header.php");

?>



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
    
   <?php foreach ($recipes as $key => $recipe) {
  include('Templates/reccipe_partial.php');
     } ?>

    </div>
  <?php
require("Templates/footer.php");
  ?>
  
