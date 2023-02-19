<div class="card col-4" style="width: 35em;">
      <img src="<?=_RECEPICES_IMG_PATH_.$recipe["images"]?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?=$recipe["title"]?></h5>
        <p class="card-text"><?=$recipe["description"]?></p>
        <a href="recette.php?id=<?=$key;?>" class="btn btn-primary">Accédez à la recette</a>
      </div>
    </div>