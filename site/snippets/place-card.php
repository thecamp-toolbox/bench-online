<li class="col-12 col-md-6 col-lg-4">
    <div class="card place-card">
        <a href="<?= $place->url() ?>">
        	<?php if ($place->header() != '') : ?>  
        		<?php $header = $place->header()->toFile() ?>
        		<?php $header = $header->crop(600,350) ?>
           		<img class="card-img-top" src="<?= $header->url() ?>" alt="Card image cap">
           	<?php endif ?>
        </a>
        <div class="card-body pb-1">
            <div class="d-flex align-items-end move-up">
                <?php if ($place->logo() != '') : ?>
                    <?php $logo = $place->logo()->toFile() ?>
                    <?php $logo = $logo->crop(60,60) ?>
                    <img alt="Image" src="<?= $logo->url() ?>" class="avatar avatar-60 rounded mr-2" />
                <?php endif ?>
                <a href="<?= $place->url() ?>">
                    <h4 class="card-title markpromed"><?= $place->title() ?></h4>
                </a>

            </div>
            <p class="mt-4 card-text italic baseline"><?= $place->baseline()->kirbytext() ?></p>
        </div>
        <div class="card-footer card-footer-borderless d-flex justify-content-between">
            <div class="text-small w-100">
                <ul class="list-inline">
                    <?php $thearcs = $place->arcs()->toStructure() ?> 
                    <?php foreach($thearcs->sortBy('percent')->flip() as $arc) : ?>
                        <?php $thearc = page('archetypes')->children()->find($arc->anarc()) ?>
                        <a href="<?= $thearc->url() ?>" class="list-inline-item">
                            <span class="mr-1" style="color: <?= $thearc->thecol() ?>">
                                <i class="fas fa-<?= $thearc->fas() ?>"></i>
                                <?= $arc->percent().'%' ?>
                            </span>
                        </a>
                    <?php endforeach ?>
                    <li class="list-inline-item float-right">
                        <i class="fas fa-map-pin ml-1 mr-1"></i> <?= $place->location() ?>
                    </li>
                </ul>
            </div>
            <!-- 
            <div class="dropup">
                <button class="btn btn-sm btn-outline-primary dropdown-toggle dropdown-toggle-no-arrow" type="button" id="SidekickButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-h"></i>
                </button>
                
                <div class="dropdown-menu dropdown-menu-sm" aria-labelledby="SidekickButton">
                    <a class="dropdown-item" href="#">Save</a>
                    <a class="dropdown-item" href="#">Share</a>
                    <a class="dropdown-item" href="#">Comment</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Report</a>
                </div>
           
            </div>
            -->
        </div>
    </div>
</li>
<!--end of col-->