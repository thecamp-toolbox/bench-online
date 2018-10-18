<?php snippet('header') ?>

<div class="main-container">
    <section class="space-sm text-white" style="background-color: <?= $page->thecol() ?>">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        <?php if ($page->fas() != '') : ?>
                            <i class="fas fa-<?= $page->fas() ?>"></i>
                        <?php endif ?>
                        <?= $page->title() ?>
                    </h1>
                    <span class="lead"><?= $page->baseline() ?></span>
                </div>
                <!--end of col-->
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <!--end of section-->
    <section>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-md-8 col-lg-7">
                    <article>
                         <?php if ($page->pp() != '') : ?>
                            <h5>Convictions</h5>
                            <?php $conv = $page->pp()->toStructure() ?>
                            <?php foreach ($conv as $c) : ?>                            
                                <div class="alert alert-secondary" role="alert">
                                    <i class="fas fa-compass mr-2"></i><?= $c->thep() ?>
                                </div>
                            <?php endforeach ?>
                        <?php endif ?>
                        <h5>Description</h5>
                        <?= $page->text()->kirbytext() ?>
                    </article>
                </div>
                <!--end of col-->
                <div class="col-12 col-md-4">

                    <?= snippet('markers-card') ?>

                    <?php $places = page('places')->children()->filterBy('arcs', '*=',$page->uid()) ?>
                    <?php if ($places != '') : ?>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div>
                                    <span class="h5">Lieux associés</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled list-spacing-sm">
                                    <?php foreach ($places as $place) : ?>
                                        <li>
                                            <a class="media" href="<?= $place->url() ?>">
                                                <?php if ($place->header() != '') : ?>
                                                    <?php $header = $place->header()->toFile() ?>
                                                    <img alt="Image" src="<?= $header->url() ?>" class="avatar avatar-sm mr-3" />
                                                <?php endif ?>
                                                <div class="media-body">
                                                    <span class="h6 mb-0"><?= $place->title() ?></span>
                                                    <span class="text-muted">

                                                        <span class="mr-1" style="color: <?= $page->thecol() ?>">
                                                            <i class="fas fa-<?= $page->fas() ?>"></i>
                                                            <?php $arcs = $place->arcs()->toStructure() ?>
                                                            <?php $thearc = $arcs->filterBy('anarc','*=',$page->uid())?>
                                                            <?php $percent = $thearc->first()->percent() ?>
                                                            <?= $percent.'%' ?>
                                                        </span>

                                                        <i class="fas fa-map-pin mr-1"></i>
                                                        <?= $place->location() ?>        
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                    <?php endforeach ?>
                                </ul>

                            </div>
                        </div>
                        <!--end of card-->
                    <?php endif ?>

                </div>
                <!--end of col-->
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <!--end of section-->
</div>

<?php snippet('footer') ?>