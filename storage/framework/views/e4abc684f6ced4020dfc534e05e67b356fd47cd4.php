
<?php $__env->startSection('title', 'Basic DataTables'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3><?php echo app('translator')->get('lang.add_discount'); ?></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"></li>
<li class="breadcrumb-item active"> <?php echo app('translator')->get('lang.add_discount'); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
			
				<div class="card-body">
					<form class="needs-validation" novalidate="" method="POST" action="<?php echo e(route('discounts.store')); ?>">
                        <?php echo csrf_field(); ?>
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="validationCustom01"><?php echo app('translator')->get('lang.code'); ?></label>
								<input class="form-control" id="validationCustom01" type="text" name="code" 
                                value="<?php echo e(old('code')); ?>" placeholder="code" required="">
								<div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please choose a name.</div>
                                <?php $__errorArgs = ['code'];
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
							<div class="col-md-6 mb-3">
								<label for="validationCustom02"><?php echo app('translator')->get('lang.Total_Coupons'); ?></label>
								<input class="form-control" id="validationCustom02" min="0" type="number" name="coupons_number"  value="<?php echo e(old('coupons_number')); ?>" placeholder="Total Coupons" required="">
								<div class="valid-feedback">Looks good!</div>
								<?php $__errorArgs = ['coupons_number'];
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


                            <div class="col-md-6 mb-3">
								<label for="validationCustom04"><?php echo app('translator')->get('lang.User_Coupons'); ?></label>
								<input class="form-control" id="validationCustom04" type="number" min="0" placeholder="User Coupons" name="coupons_user_number" 
                                value="<?php echo e(old('coupons_user_number')); ?>" required="">
								<div class="invalid-feedback">Please provide a valid User Coupons.</div>
							</div>
					
						</div>
						<div class="row">

							<div class="col-md-6 mb-3">
                                <label for="validationCustom03"><?php echo app('translator')->get('lang.Type'); ?></label>

                                <select class="js-example-placeholder-multiple col-sm-12"  id="validationCustom03"  name="type"  required="">
                                    <option value="percentage" <?php if( old('type')=='percentage'): echo 'selected'; endif; ?>><?php echo app('translator')->get('lang.percentage'); ?></option>                                  
                                    <option value="cash" <?php if( old('type')=='cash'): echo 'selected'; endif; ?>><?php echo app('translator')->get('lang.cash'); ?></option>                                  
                                </select>
                                <div class="invalid-feedback">Please provide a valid Type.</div>

                            </div>

                            <div class="col-md-6 mb-3">
								<label for="validationCustom05"><?php echo app('translator')->get('lang.Value'); ?></label>
								<input class="form-control" id="validationCustom05" type="number" min="0" placeholder="Value" name="value" 
                                value="<?php echo e(old('value')); ?>" required="">
								<div class="invalid-feedback">Please provide a valid Value.</div>
                                <?php $__errorArgs = ['value'];
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
						
							<div class="col-md-6 mb-3">
								<label for="validationCustom06"><?php echo app('translator')->get('lang.Start_Date'); ?></label>
								<input class="form-control" id="validationCustom06" type="date" placeholder="Price" name="start_date" value="<?php echo e(old('start_date')); ?>" required="">
								<div class="invalid-feedback">Please provide a valid date.</div>
							</div>

							<div class="col-md-6 mb-3">
								<label for="validationCustom07"><?php echo app('translator')->get('lang.End_Date'); ?></label>
								<input class="form-control" id="validationCustom07" type="date" placeholder="Price" name="end_date" value="<?php echo e(old('end_date')); ?>" required="">
								<div class="invalid-feedback">Please provide a valid date.</div>
                                <?php $__errorArgs = ['end_date'];
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
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/p0q611oukaju/public_html/organizations/resources/views/admin/discount/add.blade.php ENDPATH**/ ?>