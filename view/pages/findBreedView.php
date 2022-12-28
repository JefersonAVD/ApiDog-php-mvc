<?php require __DIR__."/../header.php"; ?>
<?php if($sucess):?>
    <div class="card">
        <div class="card-body">
            <h2><strong>Breed</strong>:<?= ucfirst($dog->getBreed())?></h2>
            <h2><strong>Sub-Breed</strong>:<?= ucfirst($dog->getSubBreed()) ?></h2>
        </div>
        <img src="<?=$dog->getImg() ?>" class="card-img-bottom" alt="<?= ucfirst($dog->getBreed())?>"/>
    </div>
    <?php else:?>
    <div class="card">
        <div class="card-body text-center">
            <h2><strong>Breed Not Found</h2>
            <h3><strong>Please, try again with another name</h3>
        </div>
    </div>
    <?php endif;?>
<?php require __DIR__."/../footer.php"; ?>