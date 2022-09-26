import { Link } from "@inertiajs/inertia-react";

const ArticleList2 = ({ articles }) => {
	return (
		articles && articles.map((article, i) => (
			<Link key={i} href={ route('read', article.slug) } className="w-100">
				<div className="col-lg-12 detail-card bg-secondary2 border-rounded px-3 py-2 mt-2">
					<span className="align-middle">
						<i className="fa-solid fa-book mr-2"></i>
						{ article.title }
					</span>
				</div>
			</Link>
		))
	)
}

export default ArticleList2