import { Link } from "@inertiajs/inertia-react";

const Paginator = ({ data }) => {
	const prev = data.links[0].url;
   const next = data.links[data.links.length - 1].url;
   return (
		data.data && data.data.length > 0 && (
			<nav>
				<ul className="pagination">
					<li className="page-item">
						<Link className="page-link" href={prev} rel="prev" aria-label="">
							<i className="fa fa-angle-left"></i>
						</Link>
					</li>

					{data.links && data.links.map((link, i) => (
						i > 0 && i < data.links.length - 1 && (
							<li key={i} className={`page-item ${link.active ? 'active' : ''}`}>
								<Link className="page-link" href={link.url}>
									{link.label}
								</Link>
							</li>
						)
					))}

					<li className="page-item">
						<Link className="page-link" href={next}>
							<i className="fa fa-angle-right"></i>
						</Link>
					</li>
				</ul>
			</nav>
		)
	);
};
	
export default Paginator
