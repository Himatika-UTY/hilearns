import './Styles/home.css'

const Features = () => {
	return (
		<section className="section section-lg">
			<div className="container-fluid">
				<div className="row justify-content-center">
					<div className="col-lg-12 mb-1 mt-5">
						<span className="font-weight-900 text-default2">
							FITUR
						</span>
						<br />
						<span className="font-weight-900 display-4 text-default">
							Lihat fitur unggulan kami
						</span>
						<br />
						<span>Fitur unggulan yang kami miliki di HiLearns</span>
						<br />
					</div>
					
					<div className="col-lg-12">
						<div className="row row-grid">
							<div className="col-lg-4 mt-4">
								<div className="card card-lift--hover shadow border-0">
									<div className="card-body py-1 mt-3">
										<div className="icon icon-shape icon-shape-primary rounded-circle mb-4">
											<i className="fa fa-usd"></i>
										</div>
										<h6 className="text-primary text-uppercase font-weight-bold">
											Tidak Dipungut Biaya
										</h6>
										<p className="feature-description">
											Lorem, ipsum dolor sit amet
											consectetur adipisicing elit. Quasi
											veritatis, molestiae tempora
										</p>
									</div>
								</div>
							</div>
							<div className="col-lg-4 mt-4">
								<div className="card card-lift--hover shadow border-0">
									<div className="card-body py-1 mt-3">
										<div className="icon icon-shape icon-shape-success rounded-circle mb-4">
											<i className="fa fa-globe"></i>
										</div>
										<h6 className="text-success text-uppercase font-weight-bold">
											Akses Dimana Saja
										</h6>
										<p className="feature-description">
											Lorem ipsum dolor sit, amet
											consectetur adipisicing elit.
											Distinctio doloribus placeat libero?
										</p>
									</div>
								</div>
							</div>
							<div className="col-lg-4 mt-4">
								<div className="card card-lift--hover shadow border-0">
									<div className="card-body py-1 mt-3">
										<div className="icon icon-shape icon-shape-warning rounded-circle mb-4">
											<i className="fa fa-comments"></i>
										</div>
										<h6 className="text-warning text-uppercase font-weight-bold">
											Forum Belajar Bersama
										</h6>
										<p className="feature-description">
											Lorem ipsum dolor sit, amet
											consectetur adipisicing elit.
											Distinctio doloribus placeat libero?
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	);
}
	
export default Features
	
	