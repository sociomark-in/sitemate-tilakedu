<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url('') ?>"><img src="<?= base_url() ?>assets/logo.png" alt="Logo Image" style="height: 40px;">&nbsp;<span class="d-none d-md-inline">Dashboard</span></a>
		<!-- <a class="navbar-brand" href="<?= base_url('trl-admin') ?>">Dashboard</a> -->
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-between w-100" id="navbarNavAltMarkup">
			<div class="navbar-nav">

			</div>
			<div class="navbar-nav align-items-center">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('setting/app-settings/currency') ?>"><i class="ti ti-world"></i></a>
				</li>
				<li class="nav-item dropdown dropdown-hover position-static">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="ti ti-bell icon icon-left"></i>Notifications
					</a>
					<!-- Dropdown menu -->
					<div class="dropdown-menu w-100 mt-0" aria-labelledby="navbarDropdown" style="border-top-left-radius: 0;
								border-top-right-radius: 0;
							  ">
						<div class="container">
							<div class="row my-4"></div>
						</div>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link avatar-link d-flex lh-1 text-reset px-2 dropdown-toggle align-items-center" data-bs-toggle="dropdown" aria-label="Open user menu">
						<span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)">PK</span>
						<div class="d-none d-xl-block ps-2">
							<div>Joey</div>
							<div class="mt-1 small text-secondary">Admin</div>
						</div>
					</a>
					<ul class="dropdown-menu">
						<li>
							<div class="px-3">
								
							</div>
						</li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="#">My Profile</a></li>
						<li><a class="dropdown-item" href="#">Messages</a></li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="#">Settings</a></li>
						<li>
							<a class="dropdown-item text-danger d-flex justify-content-between" href="<?= base_url('logout') ?>">
								Logout
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
									<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
									<polyline points="16 17 21 12 16 7"></polyline>
									<line x1="21" y1="12" x2="9" y2="12"></line>
								</svg>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><i class="ti ti-layout-sidebar-right-expand"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('settings/app-settings') ?>"><i class="ti ti-settings"></i></a>
				</li>
			</div>
		</div>
	</div>
</nav>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
	<div class="offcanvas-header">
		<h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<div>
			Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
		</div>
		<div class="dropdown mt-3">
			<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
				Dropdown button
			</button>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="#">Action</a></li>
				<li><a class="dropdown-item" href="#">Another action</a></li>
				<li><a class="dropdown-item" href="#">Something else here</a></li>
			</ul>
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-md">
	<div class="collapse navbar-collapse" id="navbar-menu">
		<div class="navbar w-100">
			<div class="container-xl">
				<div class="row m-0 g-0 justify-content-between w-100">
					<ul class="navbar-nav col-md-auto col-12">
						<li class="nav-item active">
							<a class="nav-link nav-link-icon" href="<?= base_url() ?>">
								<i class="ti ti-home"></i>
								<span class="nav-link-title">
									Home
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link nav-link-icon" href="<?= base_url('banners/all') ?>">
								<i class="ti ti-photo"></i>
								<span class="nav-link-title">
									Banners
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link nav-link-icon" href="<?= base_url('popups/all') ?>">
								<i class="ti ti-photo"></i>
								<span class="nav-link-title">
									Popups
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link nav-link-icon" href="<?= base_url() ?>">
								<i class="ti ti-photo"></i>
								<span class="nav-link-title">
									Galleries
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link nav-link-icon" href="<?= base_url("documents/pdfs/all") ?>">
								<i class="ti ti-file-type-pdf"></i>
								<span class="nav-link-title">
									Documents
								</span>
							</a>
						</li>
					</ul>
					<div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last col-auto">
						<form action="./" method="get" autocomplete="off" novalidate="">
							<div class="input-icon">
								<span class="input-icon-addon">
									<i class="ti ti-search"></i>
								</span>
								<input type="text" value="" class="form-control" placeholder="Search…" aria-label="Search in website">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body">
				<form action="search" method="get">
					<div class="row m-0">
						<div class="col-md col-12">
							<input type="search" class="form-control" name="s" id="inputSearch">
						</div>
						<div class="col-md-auto col-12">
							<button class="btn btn-primary" type="submit">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
									<circle cx="11" cy="11" r="8"></circle>
									<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
								</svg>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
