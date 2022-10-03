<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
	<div class="sidenav-header">
		<i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
		<a class="navbar-brand m-0" href="{{ route('home') }}" target="_blank">
			<h5 class="text-center font-weight-bold">{{ env('APP_NAME') }}</h5>
		</a>
	</div>
	<hr class="horizontal dark mt-0">
	<div class="collapse navbar-collapse w-auto" style="min-height: 80vh;" id="sidenav-collapse-main">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link {{ $title == 'Dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}">
					<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
						<i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
					</div>
					<span class="nav-link-text ms-1">Dashboard</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ $title == 'Category' ? 'active' : '' }}" href="{{ route('category') }}">
					<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
						<i class="ni ni-bullet-list-67 text-warning text-sm opacity-10"></i>
					</div>
					<span class="nav-link-text ms-1">Categories</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ $title == 'Modul' ? 'active' : '' }}" href="{{ route('modul') }}">
					<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
						<i class="ni ni-book-bookmark text-info text-sm opacity-10"></i>
					</div>
					<span class="nav-link-text ms-1">Modul</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ $title == 'Article' ? 'active' : '' }}" href="{{ route('article') }}">
					<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
						<i class="ni ni-single-copy-04 text-success text-sm opacity-10"></i>
					</div>
					<span class="nav-link-text ms-1">Articles</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ $title == 'Recommendation' ? 'active' : '' }}" href="{{ route('recommend') }}">
					<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
						<i class="ni ni-trophy text-danger text-sm opacity-10"></i>
					</div>
					<span class="nav-link-text ms-1">Recommendation</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ $title == 'Contributors' ? 'active' : '' }}" href="{{ route('contributors') }}">
					<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
						<i class="fa fa-users text-dark text-sm opacity-10"></i>
					</div>
					<span class="nav-link-text ms-1">Contributor</span>
				</a>
			</li>
			<li class="nav-item mt-3">
				<h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">System Settings</h6>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="../pages/profile.html">
					<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
						<i class="ni ni-settings-gear-65 text-primary text-sm opacity-10"></i>
					</div>
					<span class="nav-link-text ms-1">Settings</span>
				</a>
			</li>
		</ul>
	</div>
</aside>