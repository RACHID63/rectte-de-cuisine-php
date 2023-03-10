<?php
require_once('Templates/header.php');
require_once('lib/recipes.php');

$id = ($_GET['id']);
var_dump($recipes[$id])
?>
<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img  src=<?= _RECEPICES_IMG_PATH_  .  $recipes[$id]['images'];?>   class="d-block mx-lg-auto img-fluid"   alt="recette" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3"><?= $recipes[$id]['title']?></h1>
      <p class="lead"><?= $recipes[$id]['description']?></p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
       
      </div>
    </div>
  </div>
</div>

<?php
require("Templates/footer.php");
?>