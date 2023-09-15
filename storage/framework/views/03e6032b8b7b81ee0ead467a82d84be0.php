<?php $__env->startSection('extrahtml'); ?>
    <?php if(session()->has('info')): ?>
        <body onload="showmodal()">
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p><?php echo e($content); ?></p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("footer"); ?>
    <p><?php echo e($footer); ?></p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("modaltitle"); ?>

    <h2 id="mht">Info</h2>

    <?php $__env->startSection("modalcontent"); ?>
        <p><?php echo e(session()->get('info')); ?></p>
    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pyro/Desktop/betterwebsitething/resources/views/main/home.blade.php ENDPATH**/ ?>