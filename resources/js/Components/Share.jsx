import { shareFb, shareWa, shareTl, shareTw, copyLink } from '../share';

const Share = () => {
	return (
		<>
			<div className="col-md-12 p-0">
				<div className="card p-0 shadow border-0" style={{ borderRadius: '10px' }}>
					<div className="card-body mt-3 mb-4 py-1">
						<h5 className="text-default font-weight-900"><i className="fa-solid fa-share-nodes mr-2"></i>Share Ke Social Media</h5>
						<div className="divider mb-3"></div>
						<div className="form-group">
							<div className="input-group input-group-alternative mb-4">
								<input className="form-control bg-secondary text-dark px-2" id="copyLink" value={ window.location.href } type="text" disabled />
								<div className="input-group-append ms-2" onClick={() => copyLink(window.location.href)}>
									<span className="input-group-text bg-default text-white pointer"><i className="fa-regular fa-copy"></i></span>
								</div>
							</div>
						</div>
						<div className="col-md-9 m-auto d-flex justify-content-around">
							<span onClick={() =>shareTl(window.location.href)} className="badge rounded pointer text-white" style={{ backgroundColor: '#0088CC' }}>
								<i className="fa-brands fa-telegram p-1" style={{ fontSize: '22px' }}></i>
							</span>
							<span onClick={() =>shareWa(window.location.href)} className="badge rounded text-white pointer" style={{ backgroundColor: '#25D366' }}>
								<i className="fa-brands fa-whatsapp p-1" style={{ fontSize: '24px' }}></i>
							</span>
							<span onClick={() =>shareFb(window.location.href)} className="badge rounded text-white pointer" style={{ backgroundColor: '#4267B2' }}>
								<i className="fa-brands fa-facebook p-1" style={{ fontSize: '22px' }}></i>
							</span>
							<span onClick={() =>shareTw(window.location.href)} className="badge rounded text-white pointer" style={{ backgroundColor: '#1DA1F2' }}>
								<i className="fa-brands fa-twitter p-1" style={{ fontSize: '22px' }}></i>
							</span>
						</div>	
					</div>
				</div>
			</div>
		</>
	)
}
	
export default Share;