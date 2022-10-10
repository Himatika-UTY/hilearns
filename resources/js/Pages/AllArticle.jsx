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
							<div className="col-lg-12">
								<span className="font-weight-900 text-default2">ARTICLES</span><br/>
								<span className="font-weight-900 display-4 text-default">Lihat semua article kami</span><br/>
								<span>Baca semua tutorial yang ada di HiLearn</span><br/>
							</div>
							<div className="col-md-12">
								<ArticleList data={articles.data} />
							</div>
						</div>
						<div className="row mt-4">
							<div className="col-lg-12">
								<Paginator data={articles} />
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