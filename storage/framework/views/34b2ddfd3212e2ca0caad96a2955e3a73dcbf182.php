
<?php $__env->startSection('title', 'Basic DataTables'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3> <?php echo app('translator')->get('lang.Orders'); ?> </h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Dashboard'); ?></li>
<li class="breadcrumb-item active"><?php echo app('translator')->get('lang.Orders'); ?></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
			
				<div class="card-body">
					<div class="table-responsive">
						<table class="display" id="advance-1">
							<thead>
								<tr>
									<th><?php echo app('translator')->get('lang.Order_Number'); ?></th>
									<th class="text-center"><?php echo app('translator')->get('lang.Total_Price'); ?></th>
									<th class="text-center"><?php echo app('translator')->get('lang.Status'); ?></th>
									<th><?php echo app('translator')->get('lang.Client'); ?></th>
									<th class="text-center"><?php echo app('translator')->get('lang.Time'); ?></th>
									<th class="text-center"><?php echo app('translator')->get('lang.delivery_time'); ?></th>

									<th></th>								
								</tr>
							</thead>
							<tbody>
								<?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
									<tr>
										<td><?php echo e($order->order_number); ?></td>
										<td class="text-center"><?php echo e($order->total_price); ?></td>
										<td class="text-center"><?php echo e($order->status); ?></td>
										<td>
											<?php echo e($order->user->name); ?>

										</td>
										<td class="text-center"><?php echo e($order->created_at->format('Y-m-d - H:i')); ?></td>
										<td class="text-center"><?php echo e($order->delivery_time->format('Y-m-d - H:i')); ?></td>
										<td>
											
											<a href="<?php echo e(route('order.details',$order->id)); ?>" class="btn btn-primary" ><?php echo app('translator')->get('lang.details'); ?></a>
											<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cancel orders')): ?>
											<a href="<?php echo e(route('order.change_status',[$order->id,'cancel'])); ?>" class="btn btn-primary" ><?php echo app('translator')->get('lang.cancel'); ?></a>
											<?php endif; ?>	
											<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit order status')): ?>
											<a href="<?php echo e(route('order.change_status',[$order->id,'normal'])); ?>" class="btn btn-primary" ><?php echo app('translator')->get('lang.change_status'); ?></a>
											<?php endif; ?>	
											<?php if($order->file): ?>
    											<a href="<?php echo e(asset($order->file)); ?>" download rel="noopener noreferrer" target="_blank" class="btn btn-success">
                                                   <?php echo app('translator')->get('lang.downloadFile'); ?>
                                                </a>
                                            <?php endif; ?>
										</td>
									</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
									
								<?php endif; ?>
								
							</tbody>
							<tfoot>
								<tr>
									<th><?php echo app('translator')->get('lang.Order_Number'); ?></th>
									<th class="text-center"><?php echo app('translator')->get('lang.Total_Price'); ?></th>
									<th class="text-center"><?php echo app('translator')->get('lang.Status'); ?></th>
									<th><?php echo app('translator')->get('lang.Client'); ?></th>
									<th class="text-center"><?php echo app('translator')->get('lang.Time'); ?></th>
									<th class="text-center"><?php echo app('translator')->get('lang.delivery_time'); ?></th>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/p0q611oukaju/public_html/organizations/resources/views/admin/order/index.blade.php ENDPATH**/ ?>