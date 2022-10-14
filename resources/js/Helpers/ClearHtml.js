const ClearHtml = (html) => {
	return html.replace(/(<([^>]+)>)/ig, '').substring(0, 95) + '...';
}

export default ClearHtml;