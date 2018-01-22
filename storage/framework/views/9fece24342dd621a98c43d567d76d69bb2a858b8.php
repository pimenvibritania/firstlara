<?php $__env->startSection('content'); ?>
<div class="middle-box text-center animated fadeInDown">
  <h1>404</h1>
  <h3 class="font-bold">Oops! <?php echo e(class_basename($exception->getPrevious() ? : $exception)); ?></h3>

  <div class="error-desc">
    <?php echo e($exception->getPrevious() ? $exception->getPrevious()->getMessage() : $exception->getMessage()); ?>

    <form class="form-inline m-t" role="form">
      <div class="form-group">
          <input type="text" class="form-control" placeholder="Search for page">
      </div>
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('inspinia::layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>