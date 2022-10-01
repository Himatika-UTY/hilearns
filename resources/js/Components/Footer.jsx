import { Link } from "@inertiajs/inertia-react";

const Footer = ({ articles }) => {
	return (
		<footer className="footer mt-5" style={{ backgroundColor: '#172b4d' }}>
			<div className="container-fluid mt-4">
				<div className="row row-grid align-items-center mb-3">
					<div className="col-lg-4">
						<div className="col-md-3 mt-2">
							<img src="https://i.ibb.co/Z6L1rmn/logo-1-big.png" alt="logo" width="60" />
						</div>
						<div className="col-md-12 mt-3">
							<h3 className="text-white font-weight-bolder mb-2">HIMATIKA UTY</h3>
							<h6 className="mb-0 font-weight-light text-white">Himpunan Mahasiswa Informatika Universitas Teknologi Yogyakarta</h6>
						</div>
					</div>
					<div className="col-lg-2 btn-wrapper d-flex flex-column">
						<ul>
							<h5 className="text-white font-weight-bolder mb-3">Pages</h5>
							<li className="nav nav-footer justify-content-start">
								<Link href={route('home')} className="text-white">
									Home
								</Link>
							</li>
							<li className="nav nav-footer justify-content-start mt-2">
								<Link href={route('articles')} className="text-white">
									Articles
								</Link>
							</li>
							<li className="nav nav-footer justify-content-start mt-2">
								<Link href={route('tutorial')} className="text-white">
									Tutorial
								</Link>
							</li>
							<li className="nav nav-footer justify-content-start mt-2">
								<Link href={route('contributor')} className="text-white">
									Contributors
								</Link>
							</li>
						</ul>
					</div>

					<div className="col-lg-3 btn-wrapper d-flex flex-column">
						<ul>
							<h5 className="text-white font-weight-bolder mb-3">Tutorial Favorit</h5>
							<li className="nav nav-footer justify-content-start">
								<Link href='#' className="text-white">
									Tutorial HTML
								</Link>
							</li>
							<li className="nav nav-footer justify-content-start mt-2">
								<Link href='#' className="text-white">
									Tutorial CSS
								</Link>
							</li>
							<li className="nav nav-footer justify-content-start mt-2">
								<Link href='#' className="text-white">
									Tutorial Javascript
								</Link>
							</li>
							<li className="nav nav-footer justify-content-start mt-2">
								<Link href='#' className="text-white">
									Tutorial NodeJs
								</Link>
							</li>
						</ul>
					</div>

					<div className="col-lg-3 btn-wrapper d-flex flex-column">
						<ul>
							<h5 className="text-white font-weight-bolder mb-3">Social Media</h5>
							<li className="nav nav-footer justify-content-start">
								<a href='https://www.instagram.com/himatikauty' target='_blank' className="text-white">
									Instagram
								</a>
							</li>
							<li className="nav nav-footer justify-content-start mt-2">
								<a href='https://www.youtube.com/c/HimatikaUty' target='_blank' className="text-white">
									Youtube
								</a>
							</li>
							<li className="nav nav-footer justify-content-start mt-2">
								<a href='https://www.tiktok.com/@himatikauty' target='_blank' className="text-white">
									Tiktok
								</a>
							</li>
							<li className="nav nav-footer justify-content-start mt-2">
								<a href='https://discord.com/invite/rf4AyDaHp7' target='_blank' className="text-white">
									Discord
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div className="divider mt-4 mb-4"></div>
				<div className="row align-items-center">
					<div className="col-md-12">
						<div className="copyright text-white text-center">
							Proudly made with <i className="fa fa-heart text-danger"></i> by <a href="https://himatikauty.or.id/" target="_blank">Himatika UTY</a> Using <a href="https://www.creative-tim.com/product/argon-design-system" target="_blank">Argon</a> | Inspired From PetaniKode
						</div>
					</div>
				</div>
			</div>
		</footer>
	)
}

export default Footer;