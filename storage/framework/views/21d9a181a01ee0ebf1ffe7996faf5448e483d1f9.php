
<?php $__env->startSection('title', 'Validation Forms'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3><?php echo app('translator')->get('lang.add_category'); ?></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Categories'); ?></li>
<li class="breadcrumb-item active"><?php echo app('translator')->get('lang.add_category'); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
			
				<div class="card-body">
					<form class="needs-validation" novalidate="" method="POST" action="<?php echo e(route('admin.role_permission')); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="role_id" value="<?php echo e($role->id); ?>">
						<div class="row">
                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                            
                                <div class="col-md-4">
                                        <div class="card-body animate-chk">
                                            <div class="row">
                                                <div class="col">
                                                    <label class="d-block" for="chk-ani<?php echo e($loop->iteration); ?>">
                                                    <input class="checkbox_animated" id="chk-ani<?php echo e($loop->iteration); ?>" type="checkbox" name="permissions[]" value="<?php echo e($permission->id); ?>" 
                                                    <?php if(in_array($permission->id, $rolePermissions->toArray())): echo 'checked'; endif; ?>>           
                                                    <?php echo e($permission->name); ?>

                                                    
                                                    </label>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/p0q611oukaju/public_html/organizations/resources/views/admin/role/edit.blade.php ENDPATH**/ ?>