<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="ApprentiPasSages" content="association apprentipassages">
		<title>ApprentiPasSages - <?php echo $__env->yieldContent('title'); ?></title>
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/responsive/style_reponsive_accueil.css')); ?>" rel="stylesheet">

        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
            
        <link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Rubik|Vidaloka&display=swap" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Handlee&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Give+You+Glory&display=swap" rel="stylesheet">





        

        <link rel="stylesheet" href="/js/jQCloud/dist/jqcloud.min.css">
    </head>
    <body>
        <header class="sticky-top">
            <nav class="navbar navbar-expand-lg navbar-light sticky-top d-flex">

                    <img id="logo" src="/img/fox_logo.png" alt="logo association">
                </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item m-1">
                                <a class="nav-link text-light" href="#sectionAssociation">Qui sommes-nous?</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="nav-link text-light" href="#nosPrestations">Prestations</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="nav-link text-light" href="#sectionAssociation">Evènements</a>
                            </li>
                            <li class="nav-item dropdown m-1">
                                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Plus
                                </a>
                                <div class="dropdown-menu m-t-2" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item  text-black" href="#">Galerie photos</a>
                                    <a class="dropdown-item  text-black" >Nos coups de coeur</a>
                                </div>
                            </li>
                        </ul>
                        <div class="nav-item active border rounded justify-content-between">
                            <a class="nav-link  text-light" href="" id="contactNav">Nous contacter</a>
                        </div>
                </div>

            </nav>
        </header>

        


<section>
<div id="banPresta" class="container-fluid">
	<img src="<?php echo e(asset('img/apprentis_pas_sages_logo.png')); ?>" alt="Apprentis Pas Sages" />
</div>
	<div class="row m-0 m-md-5">
		
	</div>
</section>



	<div id="ban" class="container-fluid m-t-1 ban">
		<h1 id="titreAssociation" style="box-sizing:border-box;">L'association</h1>
	</div>



<section id="sectionAssociation" class="container">
	
    
<div class="block d-flex" id="blockAssociation" style="width:100%;">
	<div class="card text-center hello">
		<div class="card-header">
			<ul class="nav nav-pills card-header-pills">
				<li class="nav-item m-4"><h4 id="evenementAssociation" class="textDecoration">Evènements</h4></li>
				<li class="nav-item m-4"><h4 id="descriptionAssociation" >Description</h4></li>
				<li class="nav-item m-4"><h4 id="statutAssociation">Statut</h4></li>
			</ul>
		</div>
		<div class="card-body m-auto">
			<div id="textEvenement">
				<h4 class="">Nos prochains évènements</h4>
				
                <div class="border rounded p-5 hello  m-3">
                    <div class="row">
                        <div class="col-sm">
                            
                        </div>
                        <div class="col-sm">
                            
                        </div>
                        <div class="col-sm">
                        
                        </div>

                    </div>
                </div>
			</div>

			<div id="textDescription" class="card-text m-3 displayNone">
				<p class="text-justify clearText" >
					Notre association, fondée en 2013, oeuvre pour <span class="shineText">la diffusion de la culture</span>,
					notamment la culture scientifique dans la vallée de la Vésubie et ailleurs.
					Nous nous efforçons de présenter des <span class="shineText">sujets scientifiques de manière ludique</span>,chacune de nos activités et de nos animations sont relues et validée par notre conseil scientifique avant d'être proposé à notre public.
					Professionnels ou amateurs, tous nos intervenants sont animés d'une même <spanclass="shineText">passion de transmettre</span>.<br>
				</p>
				<h4 class="text-center m-3 quote">Notre but : remettre du plaisir dans l'apprentissage</h4>
				<p class="text-justify clearText">
					Certains peuvent prétendre qu'enseigner, former, ne s'invente pas.<br> Nous répondons que si, justement, cela s'invente et se réinvente, chaque jour, au contact du public, au gré des nouvelles découvertes, des avancées de la science.<br>
					Nos formations sont donc toutes animées de ce désir de rester en <span class="shineText">accord</span> avec notre public et les dernières découvertes.</p>
					<h4 class="text-center m-3 quote">Action « Talents oubliés »</h4>
					<p class="text-justify clearText">Nos apprentis pas sages, intervenants, sont pour la plupart des<span class="shineText"> « talents oubliés »</span>.<br> Des personnes dotées d'une <span class="shineText">soif de découvertes</span>, souvent autodidactes, toujours très cultivées dans divers domaines, en permanence en démarche d'amélioration de leurs connaissances et compétences, elles ont rejoints notre association pour donner corps à  leur envie de savoir et de partager.<br> Notre association souhaite leur<span class="shineText"> donner une chance</span> de se faire valoir pour leur réelles compétences, pas toujours reconnues à leur juste valeur.
				</p>
				<a href="" class="btn btn-warning m-3">Nous contacter</a>
			</div>

			<div id="textStatut" class="displayNone">
				<div class="listeAssociation d-flex justify-content-start">
					<ul class="clearText">
						<li><span class="shineText">Association loi 1901, parution au JO</span>: le 10 Octobre 2013</li>
						<li><span class="shineText">siège social</span> : quartier les blancons - 06450 Belvédère </li>
						<li><span class="shineText">Agrément éducation nationale</span>: académie de Nice le 9/02/2019</li>
						<li><span class="shineText">Code APE</span> : 9499Z Autre organisation fonctionnant par adhésion volontaire</li>
						<li><span class="shineText">N°RNA</span>: W062007381</li>
						<li><span class="shineText">N° Siret</span>: 80960587600014</li>
						<li><span class="shineText">N° sociétaire</span> 3916720P (MAIF)</li>
						<li><span class="shineText">Déclaration d'activité d'organisme de formation</span> : 93060847206</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>



</section>



	<div id="banTeam" class="container-fluid">
		<h1 id="titreTeam" style="box-sizing:border-box;">Notre équipe</h1>
	</div>



	<div class="container d-flex align-items-center">
		<ul class="list-inline mx-auto">
			<li class=" list-inline-item m-1">
				<button type="button" class="btn border rounded buttonTeam" id="TeamBureau">Bureau</button>
			</li>
			<li class=" list-inline-item m-1">
				<button type="button" class="btn border rounded buttonTeam" id="teamCoordonnateur">Coordonnateur(rice)s</button>
			</li>
			<li class=" list-inline-item m-1">
				<button type="button" class="btn border rounded buttonTeam" id="TeamAnimation">Animateur(rice)s</button>
			</li>
			<li class=" list-inline-item m-1">
				<button type="button" class="btn border rounded buttonTeam" id="teamMembre">Membres</button>
			</li>
			<li class=" list-inline-item m-1">
				<button type="button" class="btn border rounded buttonTeam" id="teamCs">Conseil scientifique</button>
			</li>
		</ul>
	</div>
		<div class="row">
			
		</div>



	<div id="interlineC" style="height: 100px; background-color:white;"></div>

<section id="coupDeCoeur">
	<div class="m-t-1 ban2">
		<h1 id="titreCdc" class="float-right" style="box-sizing:border-box;">Coup de coeur</h1>
	</div>


</section>









        <footer class="m-auto border-top" >
            <div class="text-center m-t-1">
                <ul class="list-inline m-0">
                    <li class="list-inline-item text-light d-flex justify-content-center">Tous droits réservés : Les Apprentis Pas Sages</li>
                    <li class="list-inline-item d-flex justify-content-center"><a href="" class="text-decoration-none">Contact webmaster</a></li>
                </ul>
            </div>
        </footer>

<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
<script type="application/javascript" src="js/main.js"></script>
<script type="application/javascript" src="js/cardDisplayAssociation.js"></script>



    </body>
    </html>
<?php /**PATH C:\laragon\www\apprentisPasSage\resources\views/test.blade.php ENDPATH**/ ?>