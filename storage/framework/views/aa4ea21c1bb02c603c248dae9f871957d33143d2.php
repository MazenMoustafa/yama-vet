
<?php $__env->startSection('title', 'Basic DataTables'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3> <?php echo app('translator')->get('lang.banner'); ?></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"> <?php echo app('translator')->get('lang.Dashboard'); ?></li>
<li class="breadcrumb-item active"><?php echo app('translator')->get('lang.banner'); ?></li>
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
                                    <th><?php echo app('translator')->get('lang.parent_category'); ?></th>
									<th><?php echo app('translator')->get('lang.Image'); ?></th>
									<th></th>									
								</tr>
							</thead>
							<tbody>
								<?php $__empty_1 = true; $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
									<tr>
										<td>
											<?php echo e($loop->iteration); ?>

										</td>

										<td>
											<?php echo e($banner->category->name ?? __('lang.main_category')); ?>

										</td>
					
										<td >
											<img src="<?php echo e(asset($banner->name)); ?>"  alt=""  class="image-fluid"  height="90">
										</td>							
										
										<td>
											<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit category')): ?>
											<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal"  onclick="getRecord(<?php echo e($banner); ?>)"><?php echo app('translator')->get('lang.edit'); ?></button>
											
											<?php endif; ?>	

                                            <form action="<?php echo e(route('banner.destroy')); ?>" onclick="getId(<?php echo e($banner->id); ?>)" method="Post" id="form_id">
                                                <?php echo method_field("delete"); ?>
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="id" id="notification_id">
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete notification')): ?>
                                                <button id="<?php echo e($loop->iteration); ?>" class="btn btn-danger sweet-5" onclick="test()" type="button" ><?php echo app('translator')->get('lang.remove'); ?></button>
                                                <?php endif; ?>	
                                            </form>
										</td>
							
									</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
									
								<?php endif; ?>
								
							</tbody>
							<tfoot>
								<tr>
									<th>#</th>
                                    <th><?php echo app('translator')->get('lang.parent_category'); ?></th>
									<th><?php echo app('translator')->get('lang.Image'); ?></th>
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">


	<div class="modal-dialog" role="document">
	   <div class="modal-content">
		  <div class="modal-header">
			 <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('lang.edit'); ?></h5>
			 <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">

			<form class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data" action="<?php echo e(route('banner.update')); ?>">
				<?php echo csrf_field(); ?>
				<input type="hidden" id="section_id" name="id">
				
				
				<div class="mb-3">
					<div class="col-md-12 mb-3">
						<div class="col">
							<div class="mb-3 row">
								<label class="col-sm-3 col-form-label"><?php echo app('translator')->get('lang.Image'); ?></label>
								<div class="col-sm-9">
									<input class="form-control" type="file" name="name"  accept="image/*">
								</div>
							</div>
						</div>
					</div>

				</div>
				
				<div class="modal-footer">
					<button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
					<button class="btn btn-secondary" type="submit"><?php echo app('translator')->get('lang.edit'); ?></button>
				 </div>
			</form>

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
<script src="<?php echo e(asset('assets/js/sweet-alert/sweetalert.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/sweet-alert/app.js')); ?>"></script>


<?php $__env->stopSection(); ?>

<script>

	function getRecord(data){
	    document.getElementById("section_id").value=data['id'];
   }

   function getId(id){
	    document.getElementById("notification_id").value=id;
   }
</script>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/p0q611oukaju/public_html/organizations/resources/views/admin/banner/index.blade.php ENDPATH**/ ?>