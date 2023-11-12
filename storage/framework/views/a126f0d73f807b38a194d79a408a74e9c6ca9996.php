
<?php $__env->startSection('title', 'Bootstrap Basic Tables'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3><?php echo app('translator')->get('lang.order_details'); ?></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Orders'); ?></li>
<li class="breadcrumb-item active"><?php echo app('translator')->get('lang.order_details'); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col"><?php echo app('translator')->get('lang.Name'); ?></th>
								<th class="text-center"><?php echo app('translator')->get('lang.quantity'); ?></th>
                                <th class="text-center"><?php echo app('translator')->get('lang.price'); ?></th>

							</tr>
						</thead>
						<tbody>
                            <?php $__currentLoopData = collect($order)['order_details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($loop->iteration); ?></th>
                                    <td><?php echo e($item['product']['name']); ?></td>
                                    <td class="text-center"><?php echo e($item['quantity']); ?></td>
                                    <td class="text-center"><?php echo e($item['price']); ?></td>
                                </tr> 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						
						</tbody>
                        <tfoot>
                            <tr>
                              <td><?php echo app('translator')->get('lang.Total_Price'); ?></td>
                              <td><?php echo e($order['total_price']); ?></td>
                            </tr>
                        </tfoot>
					</table>
					<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('assign order driver')): ?>
					<div class="card-body">
						<form class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data" action="<?php echo e(route('order.assign_driver')); ?>">
							<?php echo csrf_field(); ?>
							<div class="row">
							
								<input type="hidden" name="id" value="<?php echo e($order->id); ?>">
								<div class="col-md-6 mb-3">
									<label for="validationCustom01"><?php echo app('translator')->get('lang.Drivers'); ?></label>
	
									<select class="js-example-placeholder-multiple col-sm-12"  id="validationCustom01"  name="driver_id"  >
										<option value=""></option>

										<?php $__empty_1 = true; $__currentLoopData = $drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	
											<option value="<?php echo e($driver->id); ?>" <?php if($driver->id == $order->driver_id): echo 'selected'; endif; ?>><?php echo e($driver->name); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
											
										<?php endif; ?>
								  
									</select>
									<div class="invalid-feedback">Please provide a valid Drivers.</div>
	
								</div>
	
								
							</div>
							
	
							<div class="text-center">
								<button class="btn btn-primary" type="submit"><?php echo app('translator')->get('lang.edit'); ?></button>
							</div>
						</form>
					</div>
					<?php endif; ?>	


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
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/p0q611oukaju/public_html/organizations/resources/views/admin/order/details.blade.php ENDPATH**/ ?>