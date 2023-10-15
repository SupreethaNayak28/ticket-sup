
<?php $__env->startSection('content'); ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tickets</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>
    <form action="" method="post">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label for="summary">Summary</label>
            <input type="text" id="summary" name="summary" class="form-control <?php echo e($errors->has('summary') ? 'is-invalid' : ''); ?>" />
            <?php if($errors->has('summary')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('summary')); ?></strong>
        </span>
        <?php endif; ?>
        </div><br>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" id="description" name="description" class="form-control <?php echo e($errors->has('description') ? 'is-invalid' : ''); ?>" />
            <?php if($errors->has('description')): ?>
        <span class="form-text">
            <strong><?php echo e($errors->first('description')); ?></strong>
        </span>
        <?php endif; ?>
        </div><br>
        <?php echo $__env->make('layouts.partials._statuses', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <br>
        <button class="btn btn-primary" type="submit">Add</button>
        <a href="<?php echo e(route('tickets.index')); ?>" class="btn btn-secondary">Back</a>
    </form>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SUPREETHA\Desktop\ticket\ticket-app\resources\views/tickets/create.blade.php ENDPATH**/ ?>