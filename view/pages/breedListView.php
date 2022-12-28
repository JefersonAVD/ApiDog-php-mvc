    <?php require __DIR__.'/../header.php'; ?>
    <div class="row">
        <?php 
            foreach($dogList as $dog):
        ?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="<?= $dog->getImg()?>" class="img-fluid img-project"/>
                <div class="card-body">
                    <p><?= $dog->getBreed() ?></p>
                    <p><?= $dog->getSubBreed()?></p>
                </div>
            </div>
        </div>
        <?php
            endforeach;
        ?>
    </div>
    
    <?php require  __DIR__.'/../footer.php'; ?>
