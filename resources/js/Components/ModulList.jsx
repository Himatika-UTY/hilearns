import { Link } from "@inertiajs/inertia-react";

const getImage = (image) => {
	return `/upload/modul/${image}`;
}

const ModulList = ({ moduls }) => {
	return (
		<>
			{moduls.data && moduls.data.map((modul, i) =>
				<div key={i} className="col-lg-12 mt-lg-4">
					<Link href={ route('detail', modul.slug) }>
						<div className="card card-lift--hover shadow border-0 rounded align-content-center">
							<div className="card-body py-3 px-3 tutorial-flex">
								<div className="w-auto">
									<img src={getImage(modul.image)} className="tutorial-image-lg" alt="Responsive image" />
								</div>
								<div className="tutorial-desc-lg">
									<span className="font-weight-900 tutorial-title-lg text-default">{modul.name}</span>
									<p className="tutorial-desc-md" style={{ fontSize: '0.98rem' }}>{modul.description.substring(0, 230)}</p>
								</div>
							</div>
						</div>
					</Link>
				</div>
			)}
		</>
	);
}

export default ModulList