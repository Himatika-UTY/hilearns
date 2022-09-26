import '../Components/Styles/tutorial.css';
import '../Components/Styles/read.css';
import Navbar from '../Components/Navbar';
import Footer from '../Components/Footer';
import { Link } from '@inertiajs/inertia-react';
import Share from '../Components/Share';
import Recent from '../Components/Recent';
import DaftarIsi from '../Components/DaftarIsi';
import { useEffect } from 'react';

const getImageLink = (image) => {
	return `/upload/articles/${image}`;
}

const formatDate = (date) => {
	const options = { year: "numeric", month: "long", day: "numeric" };
	return new Date(date).toLocaleDateString("id-ID", options);
}

export default function Read(props) {
	const article = props.article;
	const articles = props.articles;
	const recent = props.recent;

	useEffect(() => {
		var disqus_config = function () {
			this.page.url = window.location.href;
			this.page.identifier = article.id;
		};

		(function() {
			var d = document, s = d.createElement('script');
			s.src = 'https://hilearns.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
		})();
	}, []);

	return (
		<>
			<Navbar />
			<main>
				<section className="section">
					<div className="container-fluid">
						<div className="row row-grid mt-6">
							<div className="col-md-8">
								<div className="card shadow border-0" style={{ borderRadius: '10px' }}>
									<div className="card-body px-5 py-4 mt-3">
										<div className="profile">
											<p className="description font-weight-500 mt-1 ml-2 mr-3"><i className="fa fa-user mr-2" aria-hidden="true"></i>{ article.author }</p>
											<p className="description font-weight-500 mt-1 ml-2"><i className="fa fa-calendar mr-2" aria-hidden="true"></i>{ formatDate(article.created_at) }</p>
										</div>
										<h1 className="text-default read-title">{ article.title }</h1>
										<div className="divider"></div>

										<div className="topics">
											{article && article.topic.split(',').map((value, i) => (
												<Link key={i} href={route('topic', value)} className="mr-1">
													<span className="badge rounded topic px-3 py-2 pointer mt-1" style={{ fontSize: '12px'}}>
														#{ value }
													</span>
												</Link>
											))}
										</div>

										<div className="content mt-3 mb-4 text-default" id='content'>
											<img src={getImageLink(article.image)} alt="cover" className="read-cover mb-3" />
											<div dangerouslySetInnerHTML={{__html: article.content}}></div>
										</div>
									</div>
								</div>
							</div>
							<div className="col-md-4">
								{/* Share Section */}
								<Share />

								{/* Recent Section */}
								<Recent data={recent} />
								
							</div>
							{/* Daftar isi Section */}
							<DaftarIsi data={articles} currentId={article.id} />

							{/* Comments Section */}
							<div className="col-lg-8 mt-4">
								<div className="card shadow border-0" style={{ borderRadius: '10px' }}>
									<div className="card-body px-lg-5 py-lg-4 mb-3">
										<div id="disqus_thread"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<input type="hidden" name="title" id="title" value={article.title} />
			</main>
			<Footer />
		</>
	)
}

