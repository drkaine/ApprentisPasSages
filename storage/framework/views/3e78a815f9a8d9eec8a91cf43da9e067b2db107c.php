

<!-- footer -->
<footer class="footer">

      </ul>
        <ul class="partenaires">
            <?php $__currentLoopData = $Photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><img  src="images/<?php echo e($photo); ?>"  width = "100" height="100" class="<?php echo e(substr($photo, 3,7)); ?>">

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <ul  class="copyright">
                <li>Tous droits réservés : Les Apprentis Pas Sages © 2021  </li>
                <li><a href="" class="plan">   Plan du site</a></li>
           </ul>
          </ul>
      </ul>
    </div>
  </footer>
</div>

</html>
<?php /**PATH C:\laragon\www\apprentisPasSages\resources\views/footer.blade.php ENDPATH**/ ?>