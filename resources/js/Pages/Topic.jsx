import '../Components/Styles/tutorial.css';
import ArticleList from "../Components/ArticleList"
import Paginator from "../Components/Paginator";
import Navbar from '../Components/Navbar';
import Footer from '../Components/Footer';

const Topic = ({ title, topic, articles }) => {
	return (
		<>
			<Navbar />
			<main>
				<section className="section mt-6">
					<div className="container-fluid">
						<div className="row justify-content-center">
							<div className="col-lg-12">
								<a href=""><span className="font-weight-900 text-default2 text-uppercase">TAGS / { topic }</span></a><br/>
								<span className="font-weight-900 display-4 text-default">Topic yang kamu cari</span><br/>
								<span>Baca artikel sesuai topic yang kamu inginkan</span><br/>
							</div>
							<div className="col-lg-12 mt-1">
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

export default Topic;