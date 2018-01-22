<?php $__env->startSection('content'); ?>
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
      <div><h1 class="logo-name">IN+</h1></div>
      <h3>Welcome to IN+</h3>
      <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
          <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
      </p>
      <p>Login in. To see it in action.</p>
      <form class="m-t" role="form" method="POST" action="<?php echo e(route('login')); ?>">
       <?php echo e(csrf_field()); ?>

       <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
        <input id="email" type="text" class="form-control" placeholder="E-Mail" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
        <?php if($errors->has('email')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
        <?php endif; ?>
       </div>
       <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <?php if($errors->has('password')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('password')); ?></strong>
            </span>
        <?php endif; ?>
       </div>
       <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

       <a href="<?php echo e(route('password.request')); ?>"><small>Forgot password?</small></a>
       <p class="text-muted text-center"><small>Do not have an account?</small></p>
       <a class="btn btn-sm btn-white btn-block" href="<?php echo e(route('register')); ?>">Create an account</a>
      </form>
      <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; <?php echo e(date('Y')); ?></small> </p>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('inspinia::layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>