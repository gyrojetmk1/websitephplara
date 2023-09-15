<?php $__env->startSection('optionalcss'); ?>
    <link rel="stylesheet" href="/css/deletestyle.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extrahtml'); ?>
    <?php if(session()->has('info')): ?>

        <?php $__env->startSection("modalcontent"); ?>
            <p><?php echo e(session()->get('info')); ?></p>
        <?php $__env->stopSection(); ?>

        <body onload="showmodal()">
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <?php $__env->startSection("modalcontent"); ?>

            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($error); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__env->stopSection(); ?>
        
        <body onload="showmodal()">
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?> 
            <h3>Delete posts</h3>
            <div class="posts" id='posts'>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p class="POST"><?php echo e($post->content); ?> <br> <?php echo e($post->footer); ?></p>
                    <b>ID: <?php echo e($post->id); ?></b> |
                    <form action="/admin/delete" method="post" id="forumborum">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($post->id); ?>"/>
                        <button type="submit" name="delete" id="delete">Delete</button>
                    </form>
                    <hr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("modaltitle"); ?>
    <h2 id="mht">Info</h2>
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pyro/Desktop/betterwebsitething/resources/views/admin/delete.blade.php ENDPATH**/ ?>