<!doctype html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?= $site->description() ?>">
        <meta name="keywords" content="<?= $site->tags() ?>">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <?= css('assets/css/theme.css') ?>
        <?= css('assets/css/custom.css') ?>
    </head>

    <body>

    <div class="nav-container sticky-top" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
	    <div class="bg-dark navbar-dark">
	        <div class="container">
	            <nav class="navbar navbar-expand-lg">
	                <a class="navbar-brand" href="<?= $site->url() ?>">
	                    <img src="<?= $site->url() ?>/assets/images/mini.png">
	                </a>
	                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	                    <i class="fas fa-bars"></i>
	                </button>
	                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
	                    <ul class="navbar-nav">
	                        <li class="nav-item">
	                            <a href="<?= $site->url() ?>/places" class="nav-link">Lieux</a>
	                        </li>
	                        <?php $archetypes = page('archetypes') ?>
	                        <?php snippet('dropdown', array('thepage'=>$archetypes)) ?>
	                        <li class="nav-item">
	                            <a class="nav-link disabled" href="#" >Carte</a>
	                        </li>
	                    </ul>

	                    <ul class="navbar-nav">
	                        <li class="nav-item">
	                            <a class="nav-link" href="<?= $site->url() ?>/a-propos" >À propos</a>
	                        </li>
	                    </ul>

	                </div>
	                <!--end nav collapse-->
	            </nav>
	        </div>
	        <!--end of container-->
	    </div>
	</div>