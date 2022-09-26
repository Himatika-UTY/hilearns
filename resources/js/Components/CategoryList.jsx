const CategoryList = ({ categories }) => {
	return (
		<div className="row">
			{categories && categories.map((category, i) => 
				<div key={i} className="col-lg-4 col-md-4 pointer">
					<div className={`info text-left bg-${category.color} shadow`}>
						<div className={`icon icon-shape bg-gradient-white shadow rounded-circle text-${category.color}`}>
							<i className={ category.icon } aria-hidden="true"></i>
						</div>
                  <h5 className="info-title text-white">{ category.name }</h5>
                  <p className="description">{ category.description }</p>
					</div>
				</div>
			)}
		</div>
	)
}

export default CategoryList