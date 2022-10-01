import ArticleList from "../Components/ArticleList"
import Paginator from "../Components/Paginator";
import Navbar from '../Components/Navbar';
import Footer from '../Components/Footer';
import { Link } from '@inertiajs/inertia-react';
import { useEffect, useState } from 'react';
import '../Components/Styles/articles.css';
import ArticleImage from "../Helpers/ArticleImage";
import ClearHtml from "../Helpers/ClearHtml";

const countArticleByModul = (articles, id_modul) => {
	let count = 0;
	articles.forEach(article => {
		if (article.id_modul === id_modul) {
			count++;
		}
	});
	return count;
}

const countAllArticle = (articles) => {
	let count = 0;
	articles.forEach(article => {
		count++;
	});
	return count;
}

const AllArticle = ({ articles, moduls }) => {
	const [category, setCategory] = useState('');
	const [search, setSearch] = useState('');

	return (
		<>
			<Navbar />
			<main>
				<section className="section mt-6">
					<div className="container-fluid">
						<div className="row">
								<div className="col-md-4 mt-4">
									<div className="card shadow border-0 card-style">
										<div className="card-body py-1">
											<div className="mt-2">
												<h5 className="font-weight-bolder text-capitalize text-center p-2 text-default">Browse Categories</h5>
												<ul className="list-group list-group-flush">
													{/* All categories */}
													<li className="list-group-item">
														<Link onClick={() => setCategory('')} className="text-default">
															All Categories <span className="badge badge-default badge-pill ml-1">{countAllArticle(articles)}</span>
														</Link>
													</li>

													{moduls && moduls.map((modul, i) =>
														<li key={i} className={`list-group-item text-white ${category == modul.id ? 'articles-active' : ''}`} style={{ cursor: 'pointer' }}>
															<div onClick={() => setCategory(modul.id)} className="text-default">
																{modul.name} <span className="badge badge-default badge-pill ml-1">{countArticleByModul(articles, modul.id)}</span>
															</div>
														</li>
													)}
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div className="col-md-8">
									<div className="row">
										{/* check if useState is not null & sort by modul */}
										{!search && category && articles && articles.filter(article => article.id_modul === category).map((article, i) =>
											<div key={i} className="col-md-6 mt-4">
												<div className="card shadow border-0 card-style">
													<div className="card-body py-1">
														<Link href={route('read', article.slug)}>
															<div className="card-cover">
																<img src={ArticleImage(article.image)} alt="cover" className="cover" />
															</div>
															<div className="mt-2">
																<h5 className="font-weight-bold text-capitalize">{article.title}</h5>
																<p className="article-description text-muted">{ClearHtml(article.content)}</p>
															</div>
														</Link>
													</div>
												</div>
											</div>
										)}

										{/* check if useState is null & show all */}
										{!category && articles && articles.map((article, i) =>
											<div key={i} className="col-md-6 mt-4">
												<div className="card shadow border-0 card-style">
													<div className="card-body py-1">
														<Link href={route('read', article.slug)}>
															<div className="card-cover">
																<img src={ArticleImage(article.image)} alt="cover" className="cover" />
															</div>
															<div className="mt-2">
																<h5 className="font-weight-bold text-capitalize">{article.title}</h5>
																<p className="article-description text-muted">{ClearHtml(article.content)}</p>
															</div>
														</Link>
													</div>
												</div>
											</div>
										)}
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

export default AllArticle