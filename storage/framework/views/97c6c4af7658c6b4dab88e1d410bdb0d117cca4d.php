<!DOCTYPE html>
<html lang="<?php echo $__env->yieldContent('lang', config('app.locale', 'en')); ?>">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Atnic">

  <title><?php echo $__env->yieldContent('title', config('app.name', 'INSPINIA')); ?></title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <!-- Styles -->
  <?php $__env->startSection('styles'); ?>
  <link href="<?php echo e(mix('/css/inspinia.css')); ?>" rel="stylesheet">
  <?php echo $__env->yieldSection(); ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php echo $__env->yieldPushContent('head'); ?>
</head>

<body class="gray-bg">
  <?php echo $__env->yieldContent('content'); ?>

  <?php $__env->startSection('scripts'); ?>
  <script src="<?php echo e(mix('/js/manifest.js')); ?>" charset="utf-8"></script>
  <script src="<?php echo e(mix('/js/vendor.js')); ?>" charset="utf-8"></script>
	<script src="<?php echo e(mix('/js/auth.js')); ?>" charset="utf-8"></script>
  <?php echo $__env->yieldSection(); ?>
  <?php echo $__env->yieldPushContent('body'); ?>
</body>

</html>
