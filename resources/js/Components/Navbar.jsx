import { Link } from "@inertiajs/inertia-react";

const Navbar = () => {
	return (
		<nav id="navbar-main" className="navbar navbar-main navbar-expand-lg navbar-dark headroom2 py-2 position-fixed w-100">
			<div className="container-fluid">
				<Link className="navbar-brand mr-lg-5" href={route('home')}>
					<h4 className="text-white text-capitalize font-weight-bold mt-2">
						Himatika
					</h4>
				</Link>
				<button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
					<span className="navbar-toggler-icon"></span>
				</button>

				<div className="navbar-collapse collapse" id="navbar_global">
					<div className="navbar-collapse-header">
						<div className="row">
							<div className="col-6 collapse-brand">
								<Link href={route('home')}>
									<h4 className="text-default text-capitalize font-weight-bold mt-2">
										Himatika
									</h4>
								</Link>
							</div>
							<div className="col-6 collapse-close">
								<button type="button" className="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
									<span></span>
									<span></span>
								</button>
							</div>
						</div>
					</div>
					<ul className="navbar-nav navbar-nav-hover align-items-lg-center">
						<li className="nav-item dropdown">
							<Link className="nav-link" href={route('home')} role="button">
								<i className="fa fa-home" aria-hidden="true"></i>
								<span className="nav-link-inner--text">Home</span>
							</Link>
						</li>
						<li className="nav-item dropdown">
							<Link className="nav-link" href={route('tutorial')} role="button">
								<i className="fa fa-book" aria-hidden="true"></i>
								<span className="nav-link-inner--text">Tutorial</span>
							</Link>
						</li>
						<li className="nav-item dropdown">
                     <Link className="nav-link" href="#" role="button">
                        <i className="fa fa-users" aria-hidden="true"></i>
                        <span className="nav-link-inner--text">
                           Contributors
                        </span>
                     </Link>	
                  </li>
					</ul>
		
					<ul className="navbar-nav align-items-lg-center ml-lg-auto">
						<li className="nav-item">
                     <Link className="nav-link nav-link-icon" href={route('search')} data-toggle="tooltip" title="Search Article">
                        <i className="fas fa-search"></i>
                        <span className="nav-link-inner--text d-lg-none">
                           Search
                        </span>
                     </Link>
                  </li>

						<li className="nav-item">
							<a className="nav-link nav-link-icon" href="https://www.instagram.com/himatikauty" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
								<i className="fa-brands fa-instagram"></i>
								<span className="nav-link-inner--text d-lg-none">
									Instagram
								</span>
							</a>
						</li>
						<li className="nav-item">
							<a className="nav-link nav-link-icon" href="https://www.youtube.com/c/HimatikaUty" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
								<i className="fa-brands fa-youtube"></i>
								<span className="nav-link-inner--text d-lg-none">
									Youtube
								</span>
							</a>
						</li>
						<li className="nav-item">
							<a className="nav-link nav-link-icon" href="https://www.tiktok.com/@himatikauty" target="_blank" data-toggle="tooltip" title="Follow us on Tiktok">
								<i className="fa-brands fa-tiktok"></i>
								<span className="nav-link-inner--text d-lg-none">
									Tiktok
								</span>
							</a>
						</li>
						<li className="nav-item">
						<a className="nav-link nav-link-icon" href="https://discord.com/invite/rf4AyDaHp7" target="_blank" data-toggle="tooltip" title="Star us on Github">
							<i className="fa-brands fa-discord"></i>
							<span className="nav-link-inner--text d-lg-none">
								Discord
							</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	);
}
	
export default Navbar;