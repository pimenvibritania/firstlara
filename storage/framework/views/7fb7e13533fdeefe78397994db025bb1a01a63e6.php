<?php $__env->startSection('content'); ?>
<div class="middle-box text-center loginscreen   animated fadeInDown">
    <div>
        <div> <h1 class="logo-name">IN+</h1></div>
        <h3>Register to IN+</h3>
        <p>Create account to see it in action.</p>
        <form class="m-t" role="form"  method="POST" action="<?php echo e(route('register')); ?>">
          <?php echo e(csrf_field()); ?>

          <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
            <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
            <?php if($errors->has('name')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('name')); ?></strong>
                </span>
            <?php endif; ?>
          </div>

          <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
            <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo e(old('username')); ?>" required autofocus>
            <?php if($errors->has('username')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('username')); ?></strong>
                </span>
            <?php endif; ?>
          </div>

          <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo e(old('email')); ?>" required>
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
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
          </div>
          <div class="form-group">
            <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>
          </div>
          <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

          <p class="text-muted text-center"><small>Already have an account?</small></p>
          <a class="btn btn-sm btn-white btn-block" href="<?php echo e(route('login')); ?>">Login</a>
        </form>
        <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; <?php echo e(date('Y')); ?></small> </p>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('inspinia::layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>