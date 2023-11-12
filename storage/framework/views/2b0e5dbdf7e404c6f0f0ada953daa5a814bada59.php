<div class="sidebar-wrapper">
	<div>
		<div class="logo-wrapper">
			<a href="<?php echo e(route('seller.home')); ?>"><img class="img-fluid for-light" src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt=""><img class="img-fluid for-dark" src="<?php echo e(asset('assets/images/logo/logo_dark.png')); ?>" alt=""></a>
			<div class="back-btn"><i class="fa fa-angle-left"></i></div>
			<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
		</div>
		<div class="logo-icon-wrapper"><a href="<?php echo e(route('seller.home')); ?>"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a></div>
		<nav class="sidebar-main">
			<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
			<div id="sidebar-menu">
				<ul class="sidebar-links" id="simple-bar">
					<li class="back-btn">
						<a href="<?php echo e(route('seller.home')); ?>"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a>
						<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>

					<li class="sidebar-list">
						<label class="badge badge-success"></label><a class="sidebar-link sidebar-title active" href="#"><i data-feather="home"></i><span class="lan-3"> <?php echo app('translator')->get('lang.Dashboard'); ?></span>
							<div class="according-menu"><i class="fa fa-angle-down"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display:block;">
							<li><a class="lan-4 <?php echo e(Route::currentRouteName()=='seller.product.create' ? 'active' : ''); ?>" href="<?php echo e(route('seller.product.create')); ?>"> 
							<?php echo app('translator')->get('lang.add_Product'); ?></a></li>
							<li><a class="lan-4 <?php echo e(Route::currentRouteName()=='seller.product.index' ? 'active' : ''); ?>" href="<?php echo e(route('seller.product.index')); ?>"> 
							<?php echo app('translator')->get('lang.Products'); ?></a></li>

							<li><a class="lan-4 <?php echo e(Route::currentRouteName()=='seller.order.index' ? 'active' : ''); ?>" href="<?php echo e(route('seller.order.index')); ?>"> 
							<?php echo app('translator')->get('lang.Orders'); ?> </a></li>
							
						</ul>
					</li>


				
					
				</ul>
			</div>
			<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
		</nav>
	</div>
</div><?php /**PATH /home/p0q611oukaju/public_html/organizations/resources/views/seller/layout/sidebar.blade.php ENDPATH**/ ?>