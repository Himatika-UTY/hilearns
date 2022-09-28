import { Link } from "@inertiajs/inertia-react";

const active = (value, i) => {
	return (
		<>
			<div key={i} className="col-lg-12 detail-card bg-default text-white border-rounded px-3 py-2 mt-2">
				<span className="align-middle">
					<i className="fa-solid fa-book mr-2"></i>
					{value.title}
				</span>
			</div>
		</>
	)
}

const notActive = (value) => {
	return (
		<>
			<Link href={route('read', value.slug)}>
				<div className="col-lg-12 detail-card bg-secondary2 border-rounded px-3 py-2 mt-2">
					<span className="align-middle">
						<i className="fa-solid fa-book mr-2"></i>
						{value.title}
					</span>
				</div>
			</Link>
		</>
	)
}

const DaftarIsi = ({ data, currentId }) => {
	return (
		<>
			<div className="col-lg-8 mt-4">
				<div className="card shadow border-0" style={{ borderRadius: '10px' }}>
					<div className="card-body px-lg-5 py-lg-4 mb-3">
						<h5 className="text-default font-weight-900">
							<i className="fa-solid fa-book-open mr-2"></i>
							Daftar Isi Tutorial
						</h5>

						<div className="divider mb-3"></div>
						{data && data.map((value, i) =>
							value.id == currentId ? active(value, i) : notActive(value)
						)}
					</div>
				</div>
			</div>
		</>
	)
}

export default DaftarIsi