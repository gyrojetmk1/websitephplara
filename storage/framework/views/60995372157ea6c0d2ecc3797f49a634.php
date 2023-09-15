<?php $__env->startSection('optionalcss'); ?>
    <link rel="stylesheet" href="/css/uploadstyle.css">
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
<form action="/admin/upload" method="POST">
    <?php echo csrf_field(); ?>
    <div class="container">
      <h2>Upload post</h2>
      <hr>

      <label for="contentup"><b>Content</b></label>
      <textarea type="text" placeholder="Enter main content here" name="content" id="contentup" required></textarea>
  
      <label for="footerup"><b>Footer</b></label>
      <textarea type="text" placeholder="Enter footer here" name="footer" id="footerup"></textarea>
      <hr>

      <button type="submit" class="uploadbtn"><b>Upload</b></button>
    </div>
  </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("modaltitle"); ?>
    <h2 id="mht">Info</h2>
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pyro/Desktop/betterwebsitething/resources/views/admin/upload.blade.php ENDPATH**/ ?>