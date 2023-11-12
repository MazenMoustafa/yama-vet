
<?php $__env->startSection('title', 'Bootstrap Basic Tables'); ?>

<?php $__env->startSection('css'); ?>
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
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('seller.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/p0q611oukaju/public_html/organizations/resources/views/seller/order/details.blade.php ENDPATH**/ ?>