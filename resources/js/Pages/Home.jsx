import NavbarHome from "../Components/NavbarHome"
import Footer from "../Components/Footer";
import ArticleList from "../Components/ArticleList"
import CategoryList from "../Components/CategoryList";
import Paginator from "../Components/Paginator";
import Features from "../Components/Features";
import '../Components/Styles/tutorial.css';
import BannerImg from '../Assets/Img/Banner2.svg'
import { Link } from "@inertiajs/inertia-react";
import error from "../Assets/Img/error3.png";

const Home = (props) => {
	return (
		<>
			<NavbarHome />
			<main>
				<div className="position-relative">
					<section className="section section-lg section-shaped pb-250">
						<div className="shape shape-style-1 shape-dark">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div className="container-fluid mt-5">
							<div className="col px-0">
								<div className="row">
									<div className="col-md-7 position-relative banner">
										<h1 className="display-1 text-white font-weight-900">Hilearns</h1>
										<p className="lead text-white">
											Hilearns adalah platform pembelajaran online yang menyediakan berbagai macam tutorial untuk memudahkan kamu belajar pemrograman.
										</p>
										<div className="btn-wrapper">
											<Link href={route('tutorial')} className="btn btn-white btn-icon mb-3 mb-sm-0">
												<span className="btn-inner--icon"><i className="fa fa-graduation-cap text-default" ></i></span>
												<span className="btn-inner--text text-default">Belajar Sekarang</span>
											</Link>
										</div>
									</div>
									<div className="col-md-5 position-relative">
										<img src={BannerImg} alt="banner" className="banner-img"/>
									</div>
								</div>
							</div>
						</div>
						<div className="separator separator-bottom separator-skew">
							<svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
								<polygon className="fill-white" points="2560 0 2560 100 0 100"></polygon>
							</svg>
						</div>
					</section>
				</div>

				<Features />

				<section className="section section-lg">
					<div className="container-fluid">
						<div className="row justify-content-center">
							<div className="col-lg-12">
								<span className="font-weight-900 text-default2">UPDATE</span><br/>
								<span className="font-weight-900 display-4 text-default">Artikel tutorial belajar terbaru</span><br/>
								<span>Baca tutorial terbaru kami yang masih fresh</span><br/>
							</div>
							<div className="col-lg-12 mt-1">
								<ArticleList data={props.articles} />
							</div>
						</div>
						<div className="row mt-4">
							<div className="col-lg-12">
								<Link href={route('articles')} className="btn btn-default btn-icon mb-3 mb-sm-0 rounded">
									<span className="btn-inner--icon"><i className="fa fa-arrow-right" aria-hidden="true"></i></span>
									<span className="btn-inner--text text-white">Lihat Semua Artikel</span>
								</Link>
							</div>
						</div>
					</div>
				</section>

				<section className="section section-lg pb-0 bg-default2">
					<div className="features-2">
						<div className="container-fluid">
							<div className="row align-items-center">
								<div className="col-lg-5 col-md-8 mr-auto text-left">
									<div className="pr-md-5">
										<div className="w-100">
											<span className="text-primary font-weight-900 text-white">KATEGORI</span><br/>
											<span className="font-weight-900 display-4 text-white">Belajar materi sesuai minatmu</span><br/>
											<p className="text-white">Lihat kategori materi yang kami miliki di Hilearns</p>
										</div>
										<ul className="list-unstyled">
											<li className="py-2">
												<div className="d-flex align-items-center">
													<div>
														<div className="badge badge-circle badge-white mr-3"><i className="fa fa-check text-dark" aria-hidden="true"></i></div>
													</div>
													<div>
														<h6 className="mb-0 text-white">
															Belajar sesuai minat
														</h6>
													</div>
												</div>
											</li>
											<li className="py-2">
												<div className="d-flex align-items-center">
													<div>
														<div className="badge badge-circle badge-white mr-3"><i className="fa fa-check text-dark" aria-hidden="true"></i></div>
													</div>
													<div>
														<h6 className="mb-0 text-white">
															Materi up to date dan fresh
														</h6>
													</div>
												</div>
											</li>
											<li className="py-2">
												<div className="d-flex align-items-center">
													<div>
														<div className="badge badge-circle badge-white mr-3"><i className="fa fa-check text-dark" aria-hidden="true"></i></div>
													</div>
													<div>
														<h6 className="mb-0 text-white">
															Materi mudah dipahami
														</h6>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div className="col-lg-7 col-md-12 pl-md-0 mb-6">
									<CategoryList categories={props.categories} />
								</div>
							</div>
						</div>
					</div>
				</section>

				<section className="section section-lg mt-5">
					<div className="container-fluid">
						<div className="row">
							<div className="col-lg-12 bg-default2 py-4 px-5" style={{ borderRadius: '10px' }}>
								<div className="under-construction-flex mt-2 mb-2">
									<div className="w-auto">
										<img src={error} alt="Responsive image" className="rounded under-construction-image" />
									</div>
									<div className="under-construction">
										<h2 className="text-white font-weight-bold">
											Pemberitahuan
										</h2>
										<p className="text-white font-weight-300">Dikarenakan website masih dalam tahap pengembangan, maka jika kamu menemukan bug atau error pada website ini, silahkan laporkan pada kami. Kami akan segera memperbaikinya.</p>
										<a href='#' className='btn btn-sm px-4 p-2 btn-white text-default text-capitalize font-weight-bolder mb-1'>
											<i className="fa fa-share mr-2" aria-hidden="true"></i>
											Laporkan
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>
			<Footer />
		</>
	);
}

export default Home;
