<?php if ($tags != '') : ?>
    <div class="col">
        <?php $tags = $tags->split() ?>
        <?php $count = count($tags) ?>

        <h5><?= $titre ?><? e($count>0,'s') ?></h5>
        <?php foreach ($tags as $tag) : ?>
            <a href="<?= url('places/' . url::paramsToString(['tag' => $tag])) ?>">
                <span class="tag">
                    <?= $tag ?>
                </span>
            </a>
            <?php $count-- ?>
            <?php if ($count > 0) : ?>
                •
            <?php endif ?>
        <?php endforeach ?>
    </div>
<?php endif ?>