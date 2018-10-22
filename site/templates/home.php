<?php snippet('header') ?>


<div class="container-fluid">

	<section class="space-lg">
                <img alt="Image" src="<?= $site->url() ?>/assets/images/graphic-bg-clouds-5.png" class="bg-image" />
                <div class="container">
                    <div class="row mb-4 justify-content-center text-center">
                        <div class="col-12 col-md-10 col-lg-9">
                            <h1 class="display-4">Lieux d'innovation</h1>
                            <span class="lead"><?= $page->text()->kirbytext() ?></span>
                        </div>
                        <!--end of col-->
                    </div>
                    <!--end of row-->
                    <!-- inscription 
                    <form>
                        <div class="form-row justify-content-center">
                            <div class="col-auto col-md-5 col-lg-4">
                                <div class="form-group">
                                    <input class="form-control form-control-lg" type="email" name="email" placeholder="Email Address" />
                                    <small>Nous prenons soin de votre contact</small>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-lg btn-primary">Constribuer</button>
                            </div>
                        </div>
                    </form>
                	-->
                </div>
                <!--end of container-->
            </section>
            <!--end of section-->
</div>

<div class="container pt-3 pb-3">

	<div class="row">
		<div class="col-12 pb-3">
			<h2>Archétypes</h2>
		</div>
		<?php foreach (page('archetypes')->children() as $p) : ?>
			<div class="col-6 mb-3">
				<div class="card h-100 mb-0">
					<div class="card-body">
						<a href="<?= $p->url() ?>" >
							<h5 style="color: <?= $p->thecol() ?>">
								<i class="fas fa-<?= $p->fas() ?> mr-1"></i>
								<?= $p->title() ?>	
							</h5>
							<p class="card-text text-muted"><?= $p->baseline() ?></p>
						</a>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
	<!-- end row -->

	<div class="pb-3">
		<?php $places = page('places')->children() ?>
		<h2>Lieux (<?= $places->count() ?>)</h2>
	</div>

	<ul class="row feature-list feature-list-sm">
		<?php foreach ($places->shuffle()->limit(6) as $place) : ?>
			<?php snippet('place-card', array('place' => $place)) ?>
		<?php endforeach ?>
	</ul>
	<div class="text-center">
		<a href="/places" class="btn btn-default">Voir tous les lieux</a>
	</div>
	<!-- end row -->

</div>

<?php snippet('footer') ?>