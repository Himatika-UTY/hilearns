import { Link } from "@inertiajs/inertia-react"

const getImage = (image) => {
	return `/upload/modul/${image}`;
}

const RecommendList = ({ recommends }) => {
	return (
		<>
			{recommends && recommends.map((recommend, i) => (
				<div key={i} className="col-lg-6 mt-4">
					<Link href={ route('detail', recommend.modul.slug) }>
							<div className="card card-lift--hover shadow border-0 rounded align-content-center">
								<div className="card-body py-3 px-3 tutorial-flex">
									<div className="w-auto">
										<img src={getImage(recommend.modul.image)} className="tutorial-image" alt="Responsive image" />
									</div>
									<div className="tutorial-desc">
										<span className="font-weight-bolder tutorial-title text-default">{recommend.modul.name}</span>
											<p className="tutorial-desc-sm">{recommend.modul.description.substring(0, 60) + '...'}</p>
									</div>
								</div>
							</div>
					</Link>
				</div>
			))}
		</>
	)
}

export default RecommendList