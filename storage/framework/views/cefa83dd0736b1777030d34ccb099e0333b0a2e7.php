
<?php $__env->startSection('title', 'Basic DataTables'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3> <?php echo app('translator')->get('lang.discounts'); ?></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"> <?php echo app('translator')->get('lang.Dashboard'); ?></li>
<li class="breadcrumb-item active"><?php echo app('translator')->get('lang.discounts'); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

	<div class="row">
		
		<div class="col-sm-12 mt-3">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table class="display" id="advance-1">
							<thead>
								<tr>
									<th>#</th>
									<th><?php echo app('translator')->get('lang.code'); ?></th>
									<th><?php echo app('translator')->get('lang.Total_Coupons'); ?></th>
									<th><?php echo app('translator')->get('lang.User_Coupons'); ?></th>
									<th><?php echo app('translator')->get('lang.Start_Date'); ?></th>
									<th><?php echo app('translator')->get('lang.End_Date'); ?></th>
									<th><?php echo app('translator')->get('lang.Type'); ?></th>
									<th><?php echo app('translator')->get('lang.Value'); ?></th>
									<th></th>
									
								</tr>
							</thead>
							<tbody>
                                <?php $__currentLoopData = $discounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($discount->code); ?></td>
                                        <td><?php echo e($discount->coupons_number); ?></td>
                                        <td><?php echo e($discount->coupons_user_number); ?></td>
                                        <td><?php echo e($discount->start_date); ?></td>
                                        <td><?php echo e($discount->end_date); ?></td>
                                        <td><?php echo e($discount->type); ?></td>
                                        <td><?php echo e($discount->value); ?></td>
										<td>
											<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('disable discount')): ?>
											<?php if($discount->active == true): ?>
												<a class="btn btn-danger"  href="<?php echo e(route('change_active',$discount->id)); ?>" ><?php echo app('translator')->get('lang.Disable'); ?> </a>

											<?php else: ?>
												<a class="btn btn-success"  href="<?php echo e(route('change_active',$discount->id)); ?>" ><?php echo app('translator')->get('lang.Enable'); ?></a>
											<?php endif; ?>
											<?php endif; ?>	
										</td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
							<tfoot>
								<tr>
									<th>#</th>
									<th><?php echo app('translator')->get('lang.code'); ?></th>
									<th><?php echo app('translator')->get('lang.Total_Coupons'); ?></th>
									<th><?php echo app('translator')->get('lang.User_Coupons'); ?></th>
									<th><?php echo app('translator')->get('lang.Start_Date'); ?></th>
									<th><?php echo app('translator')->get('lang.End_Date'); ?></th>
									<th><?php echo app('translator')->get('lang.Type'); ?></th>
									<th><?php echo app('translator')->get('lang.Value'); ?></th>
									<th></th>
									
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	
	</div>
</div>




<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/p0q611oukaju/public_html/organizations/resources/views/admin/discount/index.blade.php ENDPATH**/ ?>