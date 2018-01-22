<?php if($breadcrumbs): ?>
<ol class="breadcrumb">
  <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($loop->last): ?>
      <li class="active"><strong><?php echo e($breadcrumb->title); ?></strong></li>
    <?php else: ?>
      <li><a href="<?php echo e($breadcrumb->url); ?>"><?php echo e($breadcrumb->title); ?></a></li>
    <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ol>
<?php endif; ?>
