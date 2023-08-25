<?php $__env->startSection('content'); ?> 
    <p>im going to use this for testing ui and other stuff</p>
    <button id="btn">Popup 1</button>
<?php $__env->stopSection(); ?>


<?php $__env->startSection("footer"); ?>
    <p>footer</p>
<?php $__env->stopSection(); ?>


<?php $__env->startSection("modaltitle"); ?>

    <h2 id="mht">Time</h2>

    <?php $__env->startSection("modalcontent"); ?>
        <p id="time">If you're not seeing the time something went wrong</p>
    <?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?> 


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pyro/Desktop/betterwebsitething/resources/views/test.blade.php ENDPATH**/ ?>