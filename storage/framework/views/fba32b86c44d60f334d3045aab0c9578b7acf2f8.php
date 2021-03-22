<?php $__env->startSection("content"); ?>


      <!-- galerie -->
      <div id="ban" class="container-fluid m-t-1 ban">
        <h1 id="titreAssociation" >Notre Galerie</h1>
    </div>


      <section class="galerie">
          <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="item">
            <a href="album-<?php echo e($album->nom); ?>" class="elem"><img src="images/connaissance-du-hibou.jpg" ></a>
            <div class="galerie-title"><?php echo e($album->nom); ?></div>
          </div>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


      </section>

      <div class="m-t-1 ban2">

    </div>


      <?php $__env->stopSection(); ?>




<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\apprentisPasSages\resources\views/galerie.blade.php ENDPATH**/ ?>