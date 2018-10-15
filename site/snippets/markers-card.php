<div class="card">
	<div class="card-header">
		<h5 class="card-title">
            Marqueurs
            <a href="#" class="subtle float-right">?</a>
        </h5>
	</div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <div class="d-flex justify-content-between">
                <div>Programmation</div>
                <div class="text-right">Sur-mesure</div>
            </div>
            <div class="slider">
            	<div class="slider-line"></div>
            	<div class="slider-point" style="left:<?= $page->program() ?>%;"></div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between">
                <div>Lieu ouvert</div>
                <div class="text-right">Public sélectionné</div>
            </div>
            <div class="slider">
            	<div class="slider-line"></div>
            	<div class="slider-point" style="left:<?= $page->open() ?>%;"></div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between">
                <div>Bulle</div>
                <div class="text-right">Inter-organisation</div>
            </div>
            <div class="slider">
            	<div class="slider-line"></div>
            	<div class="slider-point" style="left:<?= $page->mix() ?>%;"></div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between">
                <div>Agrégateur de contenus</div>
                <div class="text-right">Créateur de contenus</div>
            </div>
            <div class="slider">
            	<div class="slider-line"></div>
            	<div class="slider-point" style="left:<?= $page->contenu() ?>%;"></div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between">
                <div>Faire pour</div>
                <div class="text-right">Donner les moyens de faire</div>
            </div>
            <div class="slider">
            	<div class="slider-line"></div>
            	<div class="slider-point" style="left:<?= $page->make() ?>%;"></div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between">
                <div>Neutralité</div>
                <div class="text-right">Radicalité</div>
            </div>
            <div class="slider">
                <div class="slider-line"></div>
                <div class="slider-point" style="left:<?= $page->neutral() ?>%;"></div>
            </div>
        </li>
        
    </ul>
</div>
<!-- end card -->