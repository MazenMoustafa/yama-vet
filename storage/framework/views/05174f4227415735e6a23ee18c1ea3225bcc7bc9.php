<div class="sidebar-wrapper">
	<div>
		<div class="logo-wrapper">
			<a href="<?php echo e(route('/')); ?>"><img class="img-fluid for-light" src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt=""><img class="img-fluid for-dark" src="<?php echo e(asset('assets/images/logo/logo_dark.png')); ?>" alt=""></a>
			<div class="back-btn"><i class="fa fa-angle-left"></i></div>
			<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
		</div>
		<div class="logo-icon-wrapper"><a href="<?php echo e(route('/')); ?>"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a></div>
		<nav class="sidebar-main">
			<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
			<div id="sidebar-menu">
				<ul class="sidebar-links" id="simple-bar">
					<li class="back-btn">
						<a href="<?php echo e(route('/')); ?>"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a>
						<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>
					
					<li class="sidebar-list">
						<label class="badge badge-success"></label><a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/dashboard' ? 'active' : ''); ?>" href="#"><i data-feather="home"></i><span class="lan-3"> <?php echo app('translator')->get('lang.Dashboard'); ?></span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/dashboard' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/dashboard' ? 'block;' : 'none;'); ?>">
							<li><a href="<?php echo e(route('city.index')); ?>" class="<?php echo e(Route::currentRouteName()=='city.index' ? 'active' : ''); ?>"> <?php echo app('translator')->get('lang.regions'); ?> </a></li>
							<li><a href="<?php echo e(route('city.create')); ?>" class="<?php echo e(Route::currentRouteName()=='city.create' ? 'active' : ''); ?>"><?php echo app('translator')->get('lang.add_region'); ?></a></li>
							
							<li><a class="lan-4 <?php echo e(Route::currentRouteName()=='slider.index' ? 'active' : ''); ?>" href="<?php echo e(route('slider.index')); ?>"><?php echo app('translator')->get('lang.slider'); ?></a></li>
							<li><a class="lan-4 <?php echo e(Route::currentRouteName()=='banner.index' ? 'active' : ''); ?>" href="<?php echo e(route('banner.index')); ?>"><?php echo app('translator')->get('lang.banner'); ?></a></li>
							<li><a class="lan-4 <?php echo e(Route::currentRouteName()=='banner.create' ? 'active' : ''); ?>" href="<?php echo e(route('banner.create')); ?>"><?php echo app('translator')->get('lang.add_banner'); ?></a></li>

							<li><a class="lan-4 <?php echo e(Route::currentRouteName()=='category.index' ? 'active' : ''); ?>" href="<?php echo e(route('category.index')); ?>"><?php echo app('translator')->get('lang.Categories'); ?></a></li>
							<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('add category')): ?>
							<li><a class="lan-4 <?php echo e(Route::currentRouteName()=='category.create' ? 'active' : ''); ?>" href="<?php echo e(route('category.create')); ?>"><?php echo app('translator')->get('lang.add_Category'); ?></a></li>
							<?php endif; ?>	
							<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('roles')): ?>

								<li><a href="<?php echo e(route('roles.index')); ?>" class="<?php echo e(Route::currentRouteName() == 'roles.index' ? 'active' : ''); ?>"><?php echo e(trans('lang.Roles')); ?></a></li>
					 		<?php endif; ?>	
						
							<li><a href="<?php echo e(route('discounts.index')); ?>" class="<?php echo e(Route::currentRouteName()=='discounts.index' ? 'active' : ''); ?>"><?php echo app('translator')->get('lang.discounts'); ?> </a></li>
							<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('add discount')): ?>
							<li><a href="<?php echo e(route('discounts.create')); ?>" class="<?php echo e(Route::currentRouteName()=='discounts.create' ? 'active' : ''); ?>"><?php echo app('translator')->get('lang.add_discount'); ?> </a></li>
							<?php endif; ?>	
						</ul>
					</li>
					
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/users' ? 'active' : ''); ?>" href="#"><i data-feather="users"></i>
							<span class="lan-7"><?php echo e(trans('lang.Users')); ?></span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/users' ? 'down' : 'right'); ?>"></i></div>
						</a>
						
	                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/users' ? 'block;' : 'none;'); ?>">
                          <li><a href="<?php echo e(route('admins.index')); ?>" class="<?php echo e(Route::currentRouteName() == 'admins.index' ? 'active' : ''); ?>"><?php echo e(trans('lang.admins')); ?></a></li>
						  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('add admin')): ?>
						  <li><a href="<?php echo e(route('admins.create')); ?>" class="<?php echo e(Route::currentRouteName() == 'admins.create' ? 'active' : ''); ?>"><?php echo e(trans('lang.add_admin')); ?></a></li>
						  <?php endif; ?>	
						  <li><a href="<?php echo e(route('admin.clients')); ?>" class="<?php echo e(Route::currentRouteName() == 'admin.clients' ? 'active' : ''); ?>"><?php echo e(trans('lang.Clients')); ?></a></li>
                          <li><a href="<?php echo e(route('seller.index')); ?>" class="<?php echo e(Route::currentRouteName() == 'seller.index' ? 'active' : ''); ?>"><?php echo app('translator')->get('lang.Sellers'); ?></a></li>
						  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('add seller')): ?>
						  <li><a href="<?php echo e(route('seller.create')); ?>" class="<?php echo e(Route::currentRouteName() == 'seller.create' ? 'active' : ''); ?>"><?php echo app('translator')->get('lang.add_Seller'); ?> </a></li>
                          <?php endif; ?>	
						  <li><a href="<?php echo e(route('driver.index')); ?>" class="<?php echo e(Route::currentRouteName() == 'driver.index' ? 'active' : ''); ?>"><?php echo app('translator')->get('lang.Drivers'); ?></a></li>
                          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('add driver')): ?>
						  <li><a href="<?php echo e(route('driver.create')); ?>" class="<?php echo e(Route::currentRouteName() == 'driver.create' ? 'active' : ''); ?>"><?php echo app('translator')->get('lang.add_Driver'); ?> </a></li>
						  <?php endif; ?>	
                          
                      </ul>
                  	</li>

					  

					  

					<li class="sidebar-list">
						
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/evaluations' ? 'block' : 'none;'); ?>;">
							
						</ul>
					</li>

				

					<li class="sidebar-list">
						
						
							
						
							
							
							
						
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/financial' ? 'block' : 'none;'); ?>;">
							
						</ul>

						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/financial' ? 'block' : 'none;'); ?>;">
							
						</ul>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/financial' ? 'block' : 'none;'); ?>;">
							
						</ul>
					</li>
					
					<li class="sidebar-list">
						
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/settings' ? 'block' : 'none;'); ?>;">
							
						</ul>
						
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/orders' ? 'active' : ''); ?>" href="#"><i data-feather="shopping-bag"></i><span><?php echo e(trans('lang.products_orders')); ?></span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/orders' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/orders' ? 'block' : 'none;'); ?>;">
							
							<li><a href="<?php echo e(route('product.index')); ?>" class="<?php echo e(Route::currentRouteName() == 
								'product.index' ? 'active' : ''); ?>"><?php echo app('translator')->get('lang.Products'); ?></a></li>
							   
							   <li><a href="<?php echo e(route('order.index')); ?>" class="<?php echo e(Route::currentRouteName() == 
								'order.index' ? 'active' : ''); ?>"><?php echo app('translator')->get('lang.Orders'); ?></a></li>
						</ul>
					</li>

					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/notifications' ? 'active' : ''); ?>" href="#">
							<i data-feather="bell"></i><span><?php echo app('translator')->get('lang.Notifications'); ?></span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/notifications' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/notifications' ? 'block' : 'none;'); ?>;">
							<li><a href="<?php echo e(route('admin.notifications.index')); ?>" class="<?php echo e(Route::currentRouteName()=='admin.notifications.index' ? 'active' : ''); ?>">  <?php echo app('translator')->get('lang.Notifications'); ?></a></li>
							<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('add notification')): ?>
							<li><a href="<?php echo e(route('admin.notifications.create')); ?>" class="<?php echo e(Route::currentRouteName()=='admin.notifications.create' ? 'active' : ''); ?>">  <?php echo app('translator')->get('lang.add_Notification'); ?> </a></li>
							<?php endif; ?>	
						</ul>
					</li>
					

					
				</ul>
			</div>
			<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
		</nav>
	</div>
</div><?php /**PATH /home/p0q611oukaju/public_html/organizations/resources/views/admin/layout/sidebar.blade.php ENDPATH**/ ?>