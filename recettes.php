<?php
require_once('Templates/header.php');
require_once('lib/config.php');
?>
<?php
  $recipes = [
    ["title" => "Mousse au chocolat", "description" => "Découvrez cette recette de Crème au chocolat. Ces petites crèmes sont très faciles et super rapides à réaliser... Faites-en une fournée et vous ne les achèterez plus jamais toutes prêtes. En plus, pas besoin de four, ce qui permettra à vos chers bambins de vous donner un p'tit coup de main pour remuer et verser la crème dans les pots... Ils vont adorer.", "images" => "1-chocolate-au-mousse.jpg"],

    ["title" => "gratin dauphinois", "description" => "Ce gratin est un plat riche et réconfortant, idéal quand le paysage se couvre de neige. Les cèpes séchés sont ici utilisés en petite quantité, plus à la façon d'un assaisonnement. Ils apportent un parfum incomparable à un plat d'apparence toute simpl.", "images" => "2-gratin-dauphinois.jpg"],

    ["title" => "salade composée", "description" => "Laitue romaine, endive, feuille de chêne, mâche, scarole ou même pissenlit pour les plus connues, difficile de faire le tour des salades vertes quand on sait qu'il en existe environ 2000 variétés dans le monde ! Petites, grosses, frisées, vertes ou rougeâtres, aux saveurs poivrées comme la roquette ou amères comme le radicchio, il y en a pour tous les goûts. La salade, c'est notre amie pour la vie surtout lorsqu'elle accompagne une bonne tartiflette et qu'elle nous donne bonne conscience.", "images" => "3-salade.jpg"]
  ];
  
?>


  <div class="ms-3  row flex-lg-row-reverse align-items-center g-5 py-5">
<h1>Liste des recette</h1>
    </div>

    <div class="row  flex-wrap d-flex justify-content-around ">
    
   <?php foreach ($recipes as $key => $recipe) {
  include('Templates/reccipe_partial.php');
     } ?>

    </div>

  <?php
require("Templates/footer.php");
  ?>