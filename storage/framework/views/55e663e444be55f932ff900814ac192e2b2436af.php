<?php if(session()->has('success')): ?>
<div class="col p-0">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
<?php endif; ?>
<?php if(session()->has('error')): ?>
<div class="col p-0">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(session('error')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
<?php endif; ?><?php /**PATH C:\Users\SUPREETHA\Desktop\ticket\ticket-app\resources\views/layouts/partials/_alerts.blade.php ENDPATH**/ ?>