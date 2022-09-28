import ArticleList2 from "../Components/ArticleList2";
import Navbar from "../Components/Navbar";
import Footer from "../Components/Footer";
import '../Components/Styles/tutorial.css';
import ModuleImage from "../Helpers/ModuleImage";

const isModul = (articles) => {
	return (
		articles.length > 0 ? (
			<ArticleList2 articles={articles} />
		) : (
			<div className="col-lg-12 bg-secondary2 border-rounded px-3 py-2 mt-2 text-center">
				<span className="align-middle text-center text-default">
					<i className="fa fa-question-circle mr-2"></i>
					Belum ada artikel
				</span>
			</div>
		)
	)
}
	

const Detail = ({ modul, articles, count }) => {
	return (
		<>
			<Navbar />
			<main>
				<section className="section mt-4">
					<div className="container-detail">
						<div className="row">
							<div className="col-sm-12 mt-6">
								<div className="bg-white shadow border-0 border-rounded">
									<div className="card-body p-lg-5">
										<div className="row">
											<div className="col-md-3">
												<img src={ModuleImage(modul.image)} className="tutorial-image-xl rounded" alt="Responsive image" />
											</div>
											<div className="col-md-9">
												<span className="text-default text-capitalize font-weight-900 detail-title">{ modul.name }</span>
												<p className="detail-desc mr-1" style={{ fontSize: '16px' }}>{ modul.description }</p>
												<div className="d-flex">
													<span className="text-default text-capitalize mr-3"><i className="fa fa-gamepad mr-2" aria-hidden="true"></i>Level { modul.level }</span>
													<span className="text-default text-capitalize"><i className="fa fa-file-text mr-2" aria-hidden="true"></i>{ count } Artikel</span>
												</div>
											</div>
										</div>
										<div className="row px-lg-3 px-3">
											<div className="divider mt-4"></div>
											{ isModul(articles) }
										</div>
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

export default Detail;

		