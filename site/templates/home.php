<?php snippet('header') ?>

<div class="container pt-3 pb-3">
	<?= $page->text()->kirbytext() ?>

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
		<h2>Lieux</h2>
	</div>

	<ul class="row feature-list feature-list-sm">
		<?php foreach (page('places')->children()->limit(3) as $place) : ?>
			<?php snippet('place-card', array('place' => $place)) ?>
		<?php endforeach ?>
	</ul>
	<div class="text-center">
		<a href="/places" class="btn btn-default">Voir tous les lieux</a>
	</div>
	<!-- end row -->

</div>

<?php snippet('footer') ?>