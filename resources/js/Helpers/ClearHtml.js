const ClearHtml = (html) => {
	return html.replace(/(<([^>]+)>)/ig, '').substring(0, 100) + '...';
}

export default ClearHtml;