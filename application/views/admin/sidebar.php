<!-- BEGIN::SIDEBAR -->
<div class="sidebar-menu">
	<div class="sidebar-header">
		<div class="logo">
			<a href="<?=base_url('admin')?>"><img src="public/core/images/icon/logo.png" alt="logo"></a>
		</div>
	</div>
	<div class="main-menu">
		<div class="menu-inner">
			<nav>
				<ul class="metismenu" id="menu">
					<li <?php if ($com === 'index') echo 'class="active"'; ?>>
						<a href="<?=base_url('admin')?>"><i class="ti-dashboard"></i><span>dashboard</span></a>
					</li>
					<li <?php if ($com === 'form') echo 'class="active"'; ?>>
						<a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>Forms</span></a>
						<ul class="collapse">
							<li <?php if ($com === 'form' && $sub === 'create') echo 'class="active"'; ?>><a href="<?=base_url('admin/form/create')?>">New Form</a></li>
							<li <?php if ($com === 'form' && $sub === 'list') echo 'class="active"'; ?>><a href="<?=base_url('admin/form/list')?>">View Forms</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>
<!-- BEGIN::END -->