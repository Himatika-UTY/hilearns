import axios from "axios";
import {useEffect, useState} from 'react';

const ContributorCard = ({ name, position, image, link }) => {
	return (
		<a href={link} target='_blank'>
			<div className="card card-lift--hover shadow border-0 rounded align-content-center rounded">
				<div className="card-body py-3 px-3 d-flex">
					<div className="w-auto">
						<img src={`/upload/contributors/` + image} width={70} alt="Responsive image" className="rounded contributor-img" />
					</div>
					<div className="mt-2 ml-3">
						<span className="font-weight-bolder text-default2">{name}</span><br />
						<span className="font-weight-bold text-default">{position}</span>
					</div>
				</div>
			</div>
		</a>
	)
}

export default ContributorCard