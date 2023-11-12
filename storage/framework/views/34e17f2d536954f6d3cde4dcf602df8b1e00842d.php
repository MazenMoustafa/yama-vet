
<?php $__env->startSection('title', 'Validation Forms'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3><?php echo app('translator')->get('lang.add_banner'); ?></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Categories'); ?></li>
<li class="breadcrumb-item active"><?php echo app('translator')->get('lang.add_banner'); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
			
				<div class="card-body">
					<form class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data" action="<?php echo e(route('banner.store')); ?>">
                        <?php echo csrf_field(); ?>
						
						<div class="row">
							<div class="col-md-6 mb-3">
                                <label for="validationCustom03"><?php echo app('translator')->get('lang.parent_category'); ?></label>

                                <select class="js-example-placeholder-multiple col-sm-12"  id="validationCustom03"  name="category_id" >
                                    <option value=""></option>

                                    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        
                                    <?php endif; ?>
                              
                                </select>
                                <div class="invalid-feedback">Please provide a valid category.</div>

                            </div>
					
						</div>

						<div class="mb-3">
                            <div class="col-md-12 mb-3">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label"><?php echo app('translator')->get('lang.add_image'); ?></label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="file" name="name" value="<?php echo e(old('image')); ?>" required accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>							
						</div>
						<button class="btn btn-primary" type="submit"><?php echo app('translator')->get('lang.save'); ?></button>
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
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/p0q611oukaju/public_html/organizations/resources/views/admin/banner/add.blade.php ENDPATH**/ ?>