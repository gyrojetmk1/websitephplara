<?php $__env->startSection('content'); ?>
<div class="content">
    <p>im going to use this for testing ui and other stuff</p>
    <br>
    <button id="btn">Popup 1</button>


    <br><br><br><br><br><br><br><br><br>


</div>
<div class="footer">
    <p>i dont really have anything to put here</p>
</div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection("modal"); ?>
<div id="modal" class="modal" style="display: none;">
    <div class="modalcontainer">
        <div class="modalh">
            <span class="closem">×</span>
            <h2 id="mht">popup of time</h2>


        </div>
        <div class="modalcon">


            <p id="time">6:40 PM</p>


        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/pyro/ESD-ISO/betterwebsitething/resources/views/test.blade.php ENDPATH**/ ?>