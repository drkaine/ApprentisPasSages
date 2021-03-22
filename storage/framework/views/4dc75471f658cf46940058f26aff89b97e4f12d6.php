<?php $__env->startSection('title', "Accueil"); ?>

<?php $__env->startSection('content'); ?>


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
	<?php echo $__env->make('pages.accueil.association-accueil', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
			<?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $membre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php echo $__env->make('pages.accueil.team-accueil', compact($membre), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>



	<div id="interlineC" style="height: 100px; background-color:white;"></div>

<section id="coupDeCoeur">
	<div class="m-t-1 ban2">
		<h1 id="titreCdc" class="float-right" style="box-sizing:border-box;">Coup de coeur</h1>
	</div>

<?php echo $__env->make('pages.accueil.coupDeCoeur-accueil',compact($hello), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>





<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\apprentisPasSage\resources\views/pages/accueil.blade.php ENDPATH**/ ?>