<?php snippet('header') ?>

<div class="container pt-3 pb-3">
	<?= $page->text()->kirbytext() ?>

	<div class="row">
		<div class="col-12 pb-3">
			<h2>Archétypes</h2>
		</div>
		<?php foreach (page('archetypes')->children() as $p) : ?>
			<div class="col-3">
				<div class="card">
					<div class="card-body">
						<a href="<?= $p->url() ?>" >
							<h5 style="color: <?= $p->thecol() ?>">
								<i class="fas fa-<?= $p->fas() ?> mr-1"></i>
								<?= $p->title() ?>	
							</h5>
						</a>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>

</div>

<?php snippet('footer') ?>