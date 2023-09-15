<?php $__env->startSection('optionalcss'); ?>
    <link rel="stylesheet" href="/css/loginstyle.css">
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
<form action="/register" method="POST">
    <?php echo csrf_field(); ?>
    <div class="container">
      <h2>Create account</h2>
      <hr>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" id="username" maxlength="24" minlength="3" required>

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" maxlength="200" name="email" id="email" required>
  
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" minlength="8" maxlength="255" name="password" id="password" required>
      <hr>

      <button type="submit" class="registerandloginbtn"><b>Register</b></button>
    </div>
  </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("modaltitle"); ?>
    <h2 id="mht">Info</h2>
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pyro/Desktop/betterwebsitething/resources/views/accounts/register.blade.php ENDPATH**/ ?>