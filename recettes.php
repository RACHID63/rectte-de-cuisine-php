<?php
require_once('Templates/header.php');
require_once('lib/config.php');

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