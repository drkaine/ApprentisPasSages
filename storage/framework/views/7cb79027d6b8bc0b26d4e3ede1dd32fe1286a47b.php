<?php $__env->startSection("content"); ?>

<div class="lien-mort">

    <div>
      <form id="formulaire"  action="#">
        <select  size=1>
            <option disabled>Veuillez choisir le lien mort !</option>
            <?php $__currentLoopData = $cdc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($c->id); ?>" ><?php echo e($c->nom); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </select><br />
        <div class="btn-form-contact">
          <input type="submit" value="Envoyer">
          <input type="reset" value="Annuler">
         </div>
      </form>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\apprentisPasSages\resources\views/lien-mort.blade.php ENDPATH**/ ?>