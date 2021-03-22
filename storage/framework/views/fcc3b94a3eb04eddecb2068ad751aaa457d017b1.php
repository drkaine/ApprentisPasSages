<?php $__env->startSection("content"); ?>
<!-- coup de coeur -->

<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" style="box-sizing:border-box;">Coups de cœur</h1>
</div>
<section>

         <?php $__currentLoopData = $ccdc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <ul class="CategorieCoupDeCoeur">
            <li>
                <h2><?php echo e($cc->nom); ?> :</h2>


                    <?php $__currentLoopData = $cdc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($c->categoriecoupsdecoeur_id==$cc->id): ?>
                <ul>
                    <li>
                       <a href="<?php echo e($c->lien); ?>"> <?php echo e($c->nom); ?></a><?php echo e($c->description); ?>

                    </li>
                </ul>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </li>
        </ul>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </section>
    <div class="m-t-1 ban2">

    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\apprentisPasSages\resources\views/coup-coeur.blade.php ENDPATH**/ ?>