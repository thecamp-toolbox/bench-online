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
                        <h5>Description</h5>
                        <?= $page->text()->kirbytext() ?>
                    </article>
                </div>
                <!--end of col-->
                <div class="col-12 col-md-4">

                    <?= snippet('markers-card') ?>

                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div>
                                <span class="h5">Lieux associés</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled list-spacing-sm">
                                <li>
                                    <a class="media" href="#">
                                        <img alt="Image" src="<?= $site->url() ?>/assets/images/chester-beatty-library.jpg" class="avatar avatar-sm mr-3" />
                                        <div class="media-body">
                                            <span class="h6 mb-0">Chester Beatty library</span>
                                            <span class="text-muted">Dublin, Ireland</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="media" href="#">
                                        <img alt="Image" src="<?= $site->url() ?>/assets/images/chester-beatty-library.jpg" class="avatar avatar-sm mr-3" />
                                        <div class="media-body">
                                            <span class="h6 mb-0">Chester Beatty library</span>
                                            <span class="text-muted">Dublin, Ireland</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="media" href="#">
                                        <img alt="Image" src="<?= $site->url() ?>/assets/images/chester-beatty-library.jpg" class="avatar avatar-sm mr-3" />
                                        <div class="media-body">
                                            <span class="h6 mb-0">Chester Beatty library</span>
                                            <span class="text-muted">Dublin, Ireland</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <!--end of card-->

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