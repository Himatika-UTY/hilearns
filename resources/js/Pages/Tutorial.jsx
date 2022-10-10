import { Link } from "@inertiajs/inertia-react";
import Navbar from "../Components/Navbar";
import Footer from "../Components/Footer";
import Paginator from "../Components/Paginator";
import ModulList from "../Components/ModulList";
import RecommendList from "../Components/RecommendList";
import '../Components/Styles/tutorial.css';

const Tutorial = ({ moduls, recommends }) => {
	return (
		<>
			<Navbar />
			<main>
				<section className="section">
					<div className="container-md">
						<div className="row justify-content-center mt-5">
							<div className="col-lg-12 mt-4">
								<span className="font-weight-900 text-default2">REKOMENDASI</span><br/>
								<span className="font-weight-900 display-4 text-default">Lihat tutorial unggulan kami</span><br/>
								<span>Tutorial unggulan yang kami miliki di HiLearn</span><br/>
							</div>
							<div className="col-lg-12">
								<div className="row row-grid">
									<RecommendList recommends={recommends} />
								</div>
							</div>
						</div>
					</div>
				</section>

				<section className="section">
					<div className="container-md">
						<div className="row justify-content-center">
							<div className="col-lg-12 mb-lg-0 mb-4">
								<span className="font-weight-900 text-default2">TUTORIAL</span><br/>
								<span className="font-weight-900 display-4 text-default">Lihat semua tutorial kami</span><br/>
								<span>Explore semua tutorial yang kami miliki di HiLearn</span><br/>
							</div>
							<div className="col-lg-12">
								<div className="row row-grid">
									<ModulList moduls={moduls} />
								</div>
							</div>
						</div>
						<div className="row mt-4">
							<div className="col-lg-12">
								<Paginator data={moduls} />
							</div>
						</div>
					</div>
				</section>
			</main>
			<Footer />
		</>
	)
}

export default Tutorial;
