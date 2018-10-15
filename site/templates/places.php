<?php snippet('header') ?>

 <div class="main-container">
  
    <section class="space-sm flush-with-above">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 d-flex justify-content-between">
                    <div>
                        <span class="text-muted text-small">Resultats 1 - 12 of 25</span>
                    </div>
                    <form class="d-flex align-items-center">
                        <span class="mr-2 text-muted text-small text-nowrap">Classement :</span>
                        <select class="custom-select">
                            <option value="alpha">Alphabetique</option>
                            <option value="old-new" selected>Nouveau</option>
                            <option value="new-old">Populaires</option>
                        </select>
                    </form>
                </div>
                <!--end of col-->
            </div>
            <!--end of row-->
            <ul class="row feature-list feature-list-sm">

            	<?php foreach ($page->children() as $place) : ?>
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