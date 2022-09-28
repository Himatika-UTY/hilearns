import { shareFb, shareWa, shareTl, shareTw, copyLink } from '../share';

const Share = () => {
	const url = window.location.href;
	return (
		<>
			<div className="col-md-12 p-0">
				<div className="card p-0 shadow border-0" style={{ borderRadius: '10px' }}>
					<div className="card-body mt-3 mb-4 py-1">
						<h5 className="text-default font-weight-900"><i className="fa-solid fa-share-nodes mr-2"></i>Share Ke Social Media</h5>
						<div className="divider mb-3"></div>
						<div className="form-group">
							<div className="input-group input-group-alternative mb-4">
								<input className="form-control bg-secondary text-dark px-2" id="copyLink" value={ url } type="text" disabled />
								<div className="input-group-append ms-2" onClick={() => copyLink(url)}>
									<span className="input-group-text bg-default text-white pointer"><i className="fa-regular fa-copy"></i></span>
								</div>
							</div>
						</div>
						<div className="col-md-8 m-auto d-flex justify-content-around">
							<button onClick={() => shareTl(url)} rel="nofollow" className="btn btn-icon-only btn-telegram rounded-circle" style={{ backgroundColor: '#0088CC' }}>
								<span className="text-white">
									<i className="fa fa-telegram"></i>
								</span>
							</button>

							<button onClick={() => shareWa(url)} rel="nofollow" className="btn btn-icon-only btn-whatsapp rounded-circle" style={{ backgroundColor: '#25D366' }}>
								<span className="text-white">
									<i className="fa fa-whatsapp"></i>
								</span>
							</button>

							<button onClick={() => shareFb(url)} rel="nofollow" className="btn btn-icon-only btn-facebook rounded-circle" style={{ backgroundColor: '#4267B2' }}>
								<span className="text-white">
									<i className="fa-brands fa-facebook"></i>
								</span>
							</button>

							<button onClick={() => shareTw(url)} rel="nofollow" className="btn btn-icon-only btn-twitter rounded-circle" style={{ backgroundColor: '#1DA1F2' }}>
								<span className="text-white">
									<i className="fa-brands fa-twitter"></i>
								</span>
							</button>
						</div>	
					</div>
				</div>
			</div>
		</>
	)
}
	
export default Share;