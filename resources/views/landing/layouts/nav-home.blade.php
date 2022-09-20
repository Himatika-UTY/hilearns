<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light py-2 headroom">
	<div class="container-fluid">
		<a class="navbar-brand mr-lg-5" href="/">
			<h4 class="text-white text-capitalize font-weight-bold mt-2">Himatika</h4>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-collapse collapse" id="navbar_global">
			<div class="navbar-collapse-header">
				<div class="row">
					<div class="col-6 collapse-brand">
						<a href="/">
							<h4 class="text-default text-capitalize font-weight-bold mt-2">Himatika</h4>
						</a>
					</div>
					<div class="col-6 collapse-close">
						<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
						</button>
					</div>
				</div>
			</div>
			<ul class="navbar-nav navbar-nav-hover align-items-lg-center">
				<li class="nav-item dropdown">
					<a class="nav-link" href="{{ route('home') }}" role="button">
						<i class="fa fa-home" aria-hidden="true"></i>
						<span class="nav-link-inner--text">Home</span>
					</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link" href="{{ route('tutorial') }}" role="button">
						<i class="fa fa-book" aria-hidden="true"></i>
						<span class="nav-link-inner--text">Tutorial</span>
					</a>
				</li>
				 <li class="nav-item dropdown">
					<a class="nav-link" href="#" role="button">
						<i class="fa fa-question-circle" aria-hidden="true"></i>
						<span class="nav-link-inner--text">About</span>
					</a>
				</li>
			</ul>
			<ul class="navbar-nav align-items-lg-center ml-lg-auto">
				<li class="nav-item">
					<a class="nav-link nav-link-icon" href="https://www.instagram.com/himatikauty" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
						<i class="fa-brands fa-instagram"></i>
						<span class="nav-link-inner--text d-lg-none">Instagram</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-link-icon" href="https://www.youtube.com/c/HimatikaUty" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
						<i class="fa-brands fa-youtube"></i>
						<span class="nav-link-inner--text d-lg-none">Youtube</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-link-icon" href="https://www.tiktok.com/@himatikauty" target="_blank" data-toggle="tooltip" title="Follow us on Tiktok">
						<i class="fa-brands fa-tiktok"></i>
						<span class="nav-link-inner--text d-lg-none">Tiktok</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-link-icon" href="https://discord.com/invite/rf4AyDaHp7" target="_blank" data-toggle="tooltip" title="Star us on Github">
						<i class="fa-brands fa-discord"></i>
						<span class="nav-link-inner--text d-lg-none">Discord</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>