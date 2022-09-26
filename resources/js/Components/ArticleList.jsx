import './Styles/home.css'
import { Link } from '@inertiajs/inertia-react';

const clearHtml = (html) => {
	return html.replace(/(<([^>]+)>)/ig, '').substring(0, 100) + '...';
}

const getImageLink = (image) => {
	return `/upload/articles/${image}`;
}

const NoArticle = () => {
   return (
      <div className="col-lg-12 m-auto">
         <div className="card shadow border-0 p-5 rounded mt-4">
            <div className="card-body py-1">
               <div className="mt-2">
                  <h3 className="font-weight-900 text-capitalize text-center">Artikel tidak ditemukan</h3>
                  <p className="text-default text-center">Silahkan coba mencari artikel lainnya yang tersedia</p>
               </div>
            </div>
         </div>
      </div>
   )
}

const ShowArticle = (data) => {
   return (
      data && data.map((article, i) =>
			<div key={i} className="col-lg-4 mt-4">
            <div className="card shadow border-0 card-style">
               <div className="card-body py-1">
                  <Link href={route('read', article.slug)}>
                     <div className="card-cover">
                        <img src={getImageLink(article.image)} alt="cover" className="cover" />
                     </div>
                     <div className="mt-2">
                        <h5 className="font-weight-bold text-capitalize">{article.title}</h5>
                        <p className="article-description text-muted">{clearHtml(article.content)}</p>
                     </div>
						</Link>
               </div>
            </div>
         </div>
		)
   )
}

const ArticleList = ({ data }) => {
	return (
      <div className="row row-grid">
         {data && data.length > 0 ? ShowArticle(data) : NoArticle()}
      </div>
   );
}

export default ArticleList