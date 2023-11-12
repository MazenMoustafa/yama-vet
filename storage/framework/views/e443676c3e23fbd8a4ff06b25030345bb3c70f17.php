
<?php $__env->startSection('title', 'Validation Forms'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3> <?php echo app('translator')->get('lang.edit_admin'); ?></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.admins'); ?></li>
<li class="breadcrumb-item active"> <?php echo app('translator')->get('lang.edit_admin'); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
			
				<div class="card-body">
					<form class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data" action="<?php echo e(route('admins.update',$admin->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($admin->id); ?>">
						<?php echo method_field("PUT"); ?>
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="validationCustom01"><?php echo app('translator')->get('lang.Name'); ?></label>
								<input class="form-control" id="validationCustom01" type="text" name="name" value="<?php echo e($admin->name); ?>" placeholder="name" required="">
								<div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please choose a name.</div>

							</div>
							<div class="col-md-6 mb-3">
								<label for="validationCustom02"><?php echo app('translator')->get('lang.Email'); ?></label>
								<input class="form-control" id="validationCustom02" type="text" name="email"  value="<?php echo e($admin->email); ?>"  placeholder="email" required="">
								<div class="valid-feedback">Looks good!</div>
								<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								    <div class="alert alert-danger"><?php echo e($message); ?></div>
							    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							</div>
                        
						</div>
						<div class="row">
						    <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><?php echo app('translator')->get('lang.Roles'); ?></label>

                                <select class="js-example-placeholder-multiple col-sm-12"  id="validationCustom01"  name="role_id"  required="">
                                    <?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
									
									<option value="<?php echo e($role->id); ?>" <?php if($role->id == $admin->roles()->first()->id): echo 'selected'; endif; ?>><?php echo e($role->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        
                                    <?php endif; ?>
                              
                                </select>
                                <div class="invalid-feedback">Please provide a valid Categories.</div>

                            </div>

							<div class="col-md-6 mb-3">
                                <label for="validationCustom01"><?php echo app('translator')->get('lang.active'); ?></label>

                                <select class="js-example-placeholder-multiple col-sm-12"  id="validationCustom01"  name="active"  required="">
									<option value="1"  <?php if($admin->active == true): echo 'selected'; endif; ?>><?php echo app('translator')->get('lang.active'); ?></option>
									<option value="0"  <?php if($admin->active == false): echo 'selected'; endif; ?>><?php echo app('translator')->get('lang.inactive'); ?></option>
                                </select>
                                <div class="invalid-feedback">Please provide a valid Categories.</div>

                            </div>
							<div class="col-md-6 mb-3">
								<label for="validationCustom05"><?php echo app('translator')->get('lang.password'); ?></label>
								<input class="form-control" id="validationCustom05" type="password" placeholder="********" name="password" value="<?php echo e(old('password')); ?>" >
								<div class="invalid-feedback">Please provide a valid password.</div>
							</div>
						</div>

                        <div class="text-center">
                            <button class="btn btn-primary" type="submit"><?php echo app('translator')->get('lang.edit'); ?></button>
                        </div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/p0q611oukaju/public_html/organizations/resources/views/admin/admins/edit.blade.php ENDPATH**/ ?>