
<?php $__env->startSection('title', 'Validation Forms'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3><?php echo app('translator')->get('lang.Notifications'); ?></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Notifications'); ?></li>
<li class="breadcrumb-item active"> <?php echo app('translator')->get('lang.add_Notification'); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
			
				<div class="card-body">
					<form class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data" action="<?php echo e(route('admin.notifications.store')); ?>">
                        <?php echo csrf_field(); ?>
						
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="section_name"><?php echo app('translator')->get('lang.Title_ar'); ?></label>
                                <input class="form-control" id="section_name" type="text" name="name_ar" value="" placeholder="" required="">
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please choose a Title.</div>
        
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="section_name"><?php echo app('translator')->get('lang.Title_En'); ?></label>
                                <input class="form-control" id="section_name" type="text" name="name_en" value="" placeholder="" required="">
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please choose a Title.</div>
        
                            </div>
    
                            <div class="col-md-6 mb-3">
                                <div class="col">
                                    <div class="mb-3 mb-0">
                                        <label for="exampleFormControlTextarea4"><?php echo app('translator')->get('lang.Body_ar'); ?></label>
                                        <textarea class="form-control" id="exampleFormControlTextarea4" name="description_ar" rows="3" required></textarea>
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">Please choose a Description.</div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="col">
                                    <div class="mb-3 mb-0">
                                        <label for="exampleFormControlTextarea4"><?php echo app('translator')->get('lang.Body_En'); ?></label>
                                        <textarea class="form-control" id="exampleFormControlTextarea4" name="description_en" rows="3" required></textarea>
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">Please choose a Description.</div>
                                    </div>
                                </div>
                               
                            </div>
    
                            
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom03"><?php echo app('translator')->get('lang.Type'); ?></label>
    
                                <select class="form-control col-sm-12"  id="validationCustom03"  name="type" required >
                                    <option value="1">general</option>
                                </select>
                                <div class="invalid-feedback">Please provide a valid Type.</div>
    
                            </div>
    
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><?php echo app('translator')->get('lang.Sellers'); ?></label>

                                <select class="js-example-placeholder-multiple col-sm-12"  id="validationCustom01"  name="seller_id"  >
                                    <option value=""></option>
                                    <?php $__empty_1 = true; $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($seller->id); ?>"><?php echo e($seller->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        
                                    <?php endif; ?>
                              
                                </select>
                                <div class="invalid-feedback">Please provide a valid seller.</div>

                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><?php echo app('translator')->get('lang.Products'); ?></label>

                                <select class="js-example-placeholder-multiple col-sm-12"  id="validationCustom01"  name="product_id" >
                                    <option value=""></option>
                                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($product->id); ?>"><?php echo e($product->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        
                                    <?php endif; ?>
                              
                                </select>
                                <div class="invalid-feedback">Please provide a valid product.</div>

                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><?php echo app('translator')->get('lang.regions'); ?></label>

                                <select class="js-example-placeholder-multiple col-sm-12"  id="validationCustom01"  name="region_id" >
                                    <option value=""></option>
                                    <?php $__empty_1 = true; $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($region->id); ?>"><?php echo e($region->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        
                                    <?php endif; ?>
                              
                                </select>
                                <div class="invalid-feedback">Please provide a valid region.</div>

                            </div>
    
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary" type="submit"><?php echo app('translator')->get('lang.save'); ?></button>
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
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/p0q611oukaju/public_html/organizations/resources/views/admin/notifications/add.blade.php ENDPATH**/ ?>