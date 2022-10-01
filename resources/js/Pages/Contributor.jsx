import Navbar from '../Components/Navbar'
import Footer from '../Components/Footer'
import { Link } from '@inertiajs/inertia-react'
import '../Components/Styles/tutorial.css';
import '../Components/Styles/contributor.css';
import ContributorImg from '../Assets/Img/Contributor3.png'

const Contributor = () => {
	return (
		<>
			<Navbar />
			<main>
				<section className="section mt-6">
					<div className="container-fluid">
						<div className="row">
							<div className="col-md-12">
								<h1 className='text-default text-center font-weight-bolder'>Contributors</h1>
								<h6 className='text-muted text-center'>Lihat siapa saja yang berkontribusi di dalam pengembangan HiLearns 👋</h6>
							</div>
						</div>
						<div className="row mt-4">
							<div className="col-lg-12">
								<div className="row justify-content-center">
									<div className="col-sm-4 mt-4">
										<div className="card card-lift--hover shadow border-0 rounded align-content-center">
											<div className="card-body py-3 px-3 d-flex">
												<div className="w-auto">
													<img src='https://api.lorem.space/image/fashion?w=150&h=150' width={70} alt="Responsive image" className="rounded contributor-img" />
												</div>
												<div className="mt-2 ml-3">
													<span className="font-weight-bolder text-default2">Jagad Raya R</span><br />
													<span className="font-weight-bold text-default">Web Developer</span>
												</div>
											</div>
										</div>
									</div>
									<div className="col-sm-4 mt-4">
										<div className="card card-lift--hover shadow border-0 rounded align-content-center">
											<div className="card-body py-3 px-3 d-flex">
												<div className="w-auto">
													<img src='https://api.lorem.space/image/fashion?w=150&h=150' width={70} alt="Responsive image" className="rounded contributor-img" />
												</div>
												<div className="mt-2 ml-3">
													<span className="font-weight-bolder text-default2">Danu Dwiki Laksana</span><br />
													<span className="font-weight-bold text-default">Curiculum Developer</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div className="row mt-7">
							<div className="col-lg-12 bg-default2 py-4 px-5" style={{ borderRadius: '10px' }}>
								<div className="contribution-flex">
									<div className="w-auto">
										<img src={ContributorImg} width={80} alt="Responsive image" className="rounded" />
									</div>
									<div className="contribution">
										<h2 className="text-white font-weight-bold">
											Ingin Namamu Ada Disini?
										</h2>
										<p className="text-white font-weight-300">Ayo segera kontak kami dan segera berkontribusi di Hilearns</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>
			<Footer />
		</>
	)
}

export default Contributor