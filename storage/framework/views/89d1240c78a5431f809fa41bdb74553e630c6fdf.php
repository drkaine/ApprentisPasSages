
<div class="col-12 col-sm-6 col-lg-3">
	<div style="width: 18rem; height: 18rem;">
		<a href="team">
			<div class="d-flex flex-column">

				<img class="imageThrombi m-auto
				<?php $__currentLoopData = $membre->getMembre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statut): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				  <?php echo e($status->status_desc); ?>

				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				"
				<?php if($membre->photo == null): ?>
					src="img/team/apprentispassages_logo_renard.png" alt="photo d'avatar">
				<?php else: ?>
					src="img/team/<?php echo e($membre->photo); ?>" alt="photo de <?php echo e($membre->nom); ?>">
				<?php endif; ?>
			</a>
			<h3 class="mt-3 textThrombi text-center"><?php echo e($membre->prenom); ?> <?php echo e($membre->nom); ?></h3>

			</div>

	</div>
</div>
<?php /**PATH C:\laragon\www\apprentisPasSages\resources\views/team-accueil.blade.php ENDPATH**/ ?>