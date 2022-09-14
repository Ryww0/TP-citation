<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <?php foreach ($citations as $citation) { ?>
                    <div class="col-3">
                        <h1><?= $citation->getCitation() ?></h1>
                        <h3>-- <?php echo $citation->getAuteur() ?> </h3>
                    </div>
                <?php } ?>
                    <div class="col-3">
                        <?= ($formCitation->create()) ?>
                    </div>
            </div>
        </div>
    </div>
</div>