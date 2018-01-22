<?php if(auth()->check()): ?>
<?php $__env->startSection('user-avatar', 'https://www.gravatar.com/avatar/' . md5(auth()->user()->email) . '?d=mm'); ?>
<?php $__env->startSection('user-name', auth()->user()->name); ?>
<?php endif; ?>

<?php $__env->startSection('breadcrumbs'); ?>
<?php echo $__env->make('inspinia::layouts.main-panel.breadcrumbs', [
  'breadcrumbs' => [
    (object) [ 'title' => 'Home', 'url' => route('home') ]
  ]
], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar-menu'); ?>
  <ul class="nav metismenu" id="side-menu" style="padding-left:0px;">
    <li class="active">
      <a href="<?php echo e(route('home')); ?>"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
    </li>
    <li>
      <a href="<?php echo e(route('products.create')); ?>"><i class="fa fa-home"></i> <span class="nav-label">Product</span></a>
    </li>
  </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('inspinia::layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>