

<?php $__env->startSection('title', 'Home | Awesome PHP'); ?>

<?php $__env->startSection('content'); ?>

<?php if($user == 'Mahmoud Mohamed Ramadan'): ?>
<p>Welcome <strong style="color: darkgreen">Admin</strong></p>
<?php else: ?>
<strong style="color: maroon">Sorry, you are NOT authenticated</strong>
<?php endif; ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web\PHP\Awesome PHP\app\Blade\views/home.blade.php ENDPATH**/ ?>