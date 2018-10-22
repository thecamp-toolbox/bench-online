
<?php snippet('header') ?>

<div class="main-container">
    <?php if ($page->header() != '') : ?>  
        <?php $header = $page->header()->toFile() ?>
    	<div class="header-image" style="background-image: url('<?= $header->url() ?>')"></div>
    <?php endif ?>
    <section class="space-sm">
        <div class="container">
            <div class="row justify-content-between">
            	<div class="col-12 col-md-8 col-lg-7 mt--8">
            		<div class="d-flex align-items-end mb-4">
                        <?php if ($page->logo() != '') : ?>
                            <?php $logo = $page->logo()->toFile() ?>
                            <?php $logo = $logo->crop(100,100) ?>
                            <img alt="Image" src="<?= $logo->url() ?>" class="avatar avatar-lg rounded" />
                        <?php endif ?>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb p-0 ml-4">
                                <li class="breadcrumb-item"><a href="<?= $site->url() ?>">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="<?= $page->parent()->url() ?>"><?= $page->parent()->title() ?></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page"><?= $page->title() ?></li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                    	<h1 class="mb-0 markpromed"><?= $page->title() ?></h1>
                        <h2 class="lead mb-2 italic">"<?= $page->baseline() ?>"</h2>

                        <div class="d-flex align-items-center">
                            <?php foreach($page->arcs()->toStructure()->sortBy('percent')->flip() as $arc) : ?>
                                <?php $thearc = page('archetypes')->children()->find($arc->anarc()) ?>
                                <a href="<?= $thearc->url() ?>">
                                    <span class="badge badge-pill mr-1 text-white" style="background-color: <?= $thearc->thecol() ?>">
                                        <i class="fas fa-<?= $thearc->fas() ?> mr-1"></i>
                                        <?= $thearc->title() ?>
                                    </span>
                                </a>

                            <?php endforeach ?>
                            
                        </div>
                        <ul class="list-inline text-small d-inline-block mt-2">
                            <!-- compatibilité 
                            <li class="">
                                <i class="fas fa-copy mr-1"></i> Compatibilité : 75%
                            </li>
                            -->
                            <?php if ($page->theurl() != '') : ?>
                                <li>
                                    <a href="<?= $page->theurl() ?>" target="_blank">
                                        <i class="fas fa-external-link-square-alt mr-1"></i><?= $page->theurl() ?>
                                    </a>
                                </li>
                            <?php endif ?>  
                        </ul>
                    </div>

                    <hr>

                	<article>
                		<h5>Information</h5>
                		<?= $page->text()->kirbytext() ?>

                        <div class="row pt-3">
                            <!-- Spécificités -->
                            <?php snippet('tags-card', array('tags' => $page->tags(), 'titre' => 'Spécificité')) ?>
                            <!-- Offres -->
                            <?php snippet('tags-card', array('tags' => $page->offres(), 'titre' => 'Offre')) ?>                        
                            <!-- Publics -->
                            <?php snippet('tags-card', array('tags' => $page->publics(), 'titre' => 'Public')) ?> 
                        </div>

                	</article>
                  
                </div>
                <!--end of col-->


                <div class="col-12 col-md-4">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <?php if ($page->staff() != '') : ?>
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            Staff
                                        </div>
                                        <span>
                                        	<?= $page->staff() ?> <i class="fas fa-users ml-1"></i>
                                        </span>
                                    </div>
                                </li>
                            <?php endif ?>

                            <?php if ($page->budget() != '') : ?>
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            Budget annuel
                                        </div>
                                        <span>
                                        	<?= $page->budget() ?> <i class="fas fa-dollar-sign ml-1"></i>
                                        </span>
                                    </div>
                                </li>
                            <?php endif ?>

                            <?php if ($page->rooming() != '') : ?>
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            Hébergement
                                        </div>
                                        <span>
                                        	<?= $page->rooming() ?> <i class="fas fa-bed ml-1"></i>
                                        </span>
                                    </div>
                                </li>
                            <?php endif ?>

                            <?php if ($page->state() != '') : ?>
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            État
                                        </div>
                                        <?php 
                                            $state = $page->state();
                                            if ($state == 'project') {
                                                $state = 'Projet';
                                            } else if ($state == 'beta') {
                                                $state = 'Beta';
                                            } else if ($state == 'croissance') {
                                                $state = 'Croissance';
                                            } else if ($state == 'stable') {
                                                $state = 'Stable';
                                            } else if ($state == 'closed') {
                                                $state = 'Fermé';
                                            }
                                        ?>
                                        <span>
                                            <?= $state ?> <i class="fas fa-shapes ml-1"></i>
                                        </span>
                                    </div>
                                </li>
                            <?php endif ?>

                            <?php if ($page->location() != '') : ?>
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            Localisation
                                        </div>
                                        <span>
                                            <?= $page->location() ?> <i class="fas fa-map-pin ml-1"></i>
                                        </span>
                                    </div>
                                </li>
                            <?php endif ?>
                        </ul>
                    </div>
                    <!-- end card -->

                    <?= snippet('markers-card') ?>

                    <?php if ($page->arcs() != '') : ?>
                        <div class="card">
                        	<div class="card-header">
    							<h5 class="card-title">
                                    Archétypes
                                    <a href="#" class="subtle float-right">?</a>
                                </h5>
    						</div>
                            <ul class="list-group list-group-flush">
                                <?php foreach($page->arcs()->toStructure()->sortBy('percent')->flip() as $arc) : ?>
                                    <?php $thearc = page('archetypes')->children()->find($arc->anarc()) ?>
                                    <li class="list-group-item pb-3">
                                        <div class="d-flex justify-content-between">
                                            <div style="color: <?= $thearc->thecol() ?>">
                                                <i class="fas fa-<?= $thearc->fas() ?> mr-1"></i> 
                                                <a href="#" style="color: <?= $thearc->thecol() ?>"><?= $thearc->title() ?></a>
                                            </div>
                                        </div>
                                        <div class="progress mt-1">
        								  <div class="progress-bar" role="progressbar" style="width: <?= $arc->percent() ?>%; background-color: <?= $thearc->thecol() ?>" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        								</div>
                                    </li>
                                <?php endforeach ?>
                                
                            </ul>
                        </div>
                    <?php endif ?>
                    <!-- end card -->

                    <!-- See also card
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div>
                                <span class="h5">Voir aussi...</span>
                            </div>
                            <a href="#">Voir tous &rsaquo;</a>
                        </div>
                        <div class="card-body">
                            <a class="media" href="#">
                                <img alt="Image" src="<?= $site->url() ?>/assets/images/chester-beatty-library.jpg" class="avatar avatar-sm mr-3" />
                                <div class="media-body">
                                    <span class="h6 mb-0">Chester Beatty library</span>
                                    <span class="text-muted">Dublin, Ireland</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    -->

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
