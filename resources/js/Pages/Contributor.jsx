import Navbar from '../Components/Navbar'
import Footer from '../Components/Footer'
import { Link } from '@inertiajs/inertia-react'
import '../Components/Styles/tutorial.css';
import '../Components/Styles/contributor.css';
import ContributorImg from '../Assets/Img/Contributor3.png'
import ContributorCard from '../Components/ContributorCard';

const trim_words = (words, length) => {
   let string = words.split(/\s+/,length);
   let newString = string.join(" ");
   return newString;
}

const Contributor = ({ contributors }) => {
	return (
		<>
			<Navbar />
			<main>
				<section className="section mt-6">
					<div className="container-fluid">
						<div className="row">
							<div className="col-md-12">
								<h1 className='text-default text-center font-weight-bolder'>Contributors</h1>
								<h6 className='text-muted text-center'>Lihat siapa saja yang berkontribusi di dalam pengembangan HiLearns 👋</h6>
							</div>
						</div>
						<div className="row mt-2">
							<div className="col-lg-12">
								<div className="row justify-content-center">
									{contributors && contributors.map((contributor, i) => 
										<div key={i} className="col-md-4 mt-3">
											<ContributorCard name={trim_words(contributor.name, 2)} position={contributor.position} image={contributor.image} link={contributor.redirect_url} />
										</div>
									)}
								</div>
							</div>
						</div>
						<div className="row mt-7">
							<div className="col-lg-12 bg-default2 py-4 px-5" style={{ borderRadius: '10px' }}>
								<div className="contribution-flex">
									<div className="w-auto">
										<img src={ContributorImg} width={80} alt="Responsive image" className="rounded" />
									</div>
									<div className="contribution">
										<h2 className="text-white font-weight-bold">
											Ingin Namamu Ada Disini?
										</h2>
										<p className="text-white font-weight-300">Ayo segera kontak kami dan segera berkontribusi di Hilearns</p>
									</div>
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

export default Contributor