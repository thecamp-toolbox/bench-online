<?php snippet('header') ?>

 <div class="main-container">
  
    <?php $places = $page->children()->sortBy('title') ?>
    <?php if (param('tag') != '') : ?>
        <?php $thetag = param('tag') ?>
        <?php if ($places->filterBy('tags', $thetag, ',') != '') : ?>
            <?php $places = $places->filterBy('tags', $thetag, ',') ?>
            <?php $cont = 'Spécificités' ?>
        <?php endif ?>
        <?php if ($places->filterBy('offres', $thetag, ',') != '') : ?>
            <?php $places = $places->filterBy('offres', $thetag, ',') ?>
            <?php $cont = 'Offres' ?>
        <?php endif ?>
        <?php if ($places->filterBy('publics', $thetag, ',') != '') : ?>
            <?php $places = $places->filterBy('publics', $thetag, ',') ?>
            <?php $cont = 'Publics' ?>
        <?php endif ?>
    <?php endif ?>



    <section class="space-sm flush-with-above">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 d-flex justify-content-between">
                    <?php if ($places != '') : ?>
                        <div>
                            <span class="text-muted text-small"><?= $places->count() ?> Résultats
                                <?php if (param('tag') != '') : ?>
                                    <?= 'pour "'.$thetag.'" ' ?>
                                <?php endif ?>
                                <?php if ($cont != '') : ?>
                                    <?= 'dans "'.$cont.'"' ?>
                                <?php endif ?>
                            </span>
                        </div>
                    <?php else : ?>
                        <h1>Désolé, nous n'avons pas trouvé de lieu correspondant à ce critère de recherche</h1>
                    <?php endif ?>

                    <!-- select 
                    <form class="d-flex align-items-center">
                        <span class="mr-2 text-muted text-small text-nowrap">Classement :</span>
                        <select class="custom-select">
                            <option value="alpha">Alphabetique</option>
                            <option value="old-new" selected>Nouveau</option>
                            <option value="new-old">Populaires</option>
                        </select>
                    </form>
                    -->
                </div>
                <!--end of col-->
            </div>
            <!--end of row-->
            <ul class="row feature-list feature-list-sm">

            	<?php foreach ($places as $place) : ?>
	                <?php snippet('place-card', array('place' => $place)) ?>
	            <?php endforeach ?>

            </ul>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <!--end of section-->
</div>

<?php snippet('footer') ?>