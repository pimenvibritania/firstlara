<?php $__env->startSection('content'); ?>
	<div class="container">
		<h2>Create a Product</h2>
		<form method="post">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Name : </label>
					<input type="text" class="form-control" name="name">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="price">Price : </label>
					<input type="text" class="form-control" name="price">
				</div>
			</div>

			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<button type="submit" class="btn btn-success" style="margin-left: 38px">Add Product</button>
				</div>
			</div>
		</form>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>