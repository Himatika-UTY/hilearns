import Navbar from "../Components/Navbar";
import Footer from "../Components/Footer";
import { useEffect, useState } from 'react';
import { Link } from "@inertiajs/inertia-react";
import ArticleImage from "../Helpers/ArticleImage";
import ClearHtml from "../Helpers/ClearHtml";

const Search = ({articles}) => {
	const [search, setSearch] = useState("");
	const [result, setResult] = useState([]);

	const getArticle = async (e) => {
		e.preventDefault();
		const filter = articles.filter(article => article.title.toLowerCase().includes(search.toLowerCase()))
		setResult(filter);
	}

	return (
		<>
			<Navbar />
			<main>
				<section className="section mt-6 mb-9">
					<div className="container-fluid	">
						<div className="row justify-content-center">
							<div className="col-lg-8 rounded">
								{/* search bar */}
								<div className="row">
									<div className="col-lg-12 bg-white shadow m-auto mt-5 d-flex p-2" style={{ borderRadius: '16px' }}>
										<form
											className="d-flex w-100"
											onSubmit={(e) => getArticle(e)}
											style={{ marginTop: "2px" }}
										>
											<input
												type={"text"}
												className="form-control border-0 ms-1 w-100 ml-1 text-default"
												placeholder="Cari tutorial berdasarkan judul..."
												onChange={(e) => setSearch(e.target.value)}
											/>

											<button
												type="submit"
												className="bg-white border-0 p-2 mr-2"
												style={{ borderRadius: "8px" }}
											>
													<i
												className="fa-solid fa-magnifying-glass text-default"
												style={{ fontSize: "24px" }}
											></i>
											</button>

										</form>
									</div>
								</div>
							</div>
							<div className="col-md-12">
								<div className="row mt-2">
									{result.length > 0 && result.map((value, i) =>
										<div key={i} className="col-md-4 mt-4">
											<div className="card shadow border-0 card-style">
												<div className="card-body py-1">
													<Link href={route('read', value.slug)}>
														<div className="card-cover">
															<img src={ArticleImage(value.image)} alt="cover" className="cover" />
														</div>
														<div className="mt-2">
															<h5 className="font-weight-bold text-capitalize">{value.title}</h5>
															<p className="article-description text-muted">{ClearHtml(value.content)}</p>
														</div>
													</Link>
												</div>
											</div>
										</div>
									)}
									{result.length === 0 &&
										<div className="col-md-9 m-auto">
											<div className="card shadow border-0 p-4 rounded mt-4">
												<div className="card-body py-1">
													<div className="mt-2">
														<h3 className="font-weight-900 text-capitalize text-center">Artikel tidak ditemukan</h3>
														<p className="text-default text-center">Silahkan coba masukkan judul artikel yang ingin dicari, kemudian tekan enter</p>
													</div>
												</div>
											</div>
										</div>
									}
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


export default Search