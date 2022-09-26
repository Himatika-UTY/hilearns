import { Link } from "@inertiajs/inertia-react";

const Recent = ({ data }) => {
	return (
		<>
			<div className="col-md-12 p-0 mt-4">
				<div className="card shadow border-0" style={{ borderRadius: '10px' }}>
					<div className="card-body mt-3 mb-4 py-1">
						<h5 className="text-default font-weight-900">
							<i className="fa-solid fa-clock-rotate-left mr-2"></i>
							Artikel Tutorial Terbaru
						</h5>
						<div className="divider mb-3"></div>
						{data && data.map((value, i) =>
							<Link key={i} href={route('read', value.slug)} className="w-100">
								<div className="col-lg-12 detail-card bg-secondary2 border-rounded px-3 py-2 mt-2">
									<span className="align-middle">{value.title}</span>
								</div>
							</Link>
						)}
					</div>
				</div>
			</div>
		</>
	)
}

export default Recent;
