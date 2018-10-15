 <li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"><?= $thepage->title() ?></a>
	<div class="dropdown-menu" aria-labelledby="pagesDropdown">
		<?php $counter = 0 ?>
		<?php foreach ($thepage->children() as $p) : ?>
		    <a class="dropdown-item" href="<?= $p->url() ?>">
		        <span class="h6 mb-0" style="color:<?= $p->thecol() ?>">
		        	<?php if ($p->fas() != '') : ?>
		        		<i class="fas fa-<?= $p->fas() ?> mr-1"></i>
		        	<?php endif ?>
		        	<?= $p->title() ?>
				</span>
		        <p class="text-small text-muted"><?= $p->baseline() ?></p>
		    </a>
		    <?php $counter++ ?>
		    <?php if ($counter < $thepage->children()->count()) : ?>
			    <div class="dropdown-divider"></div>
			<?php endif ?>
		<?php endforeach ?>
	</div>
</li>