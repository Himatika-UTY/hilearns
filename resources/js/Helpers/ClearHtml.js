const ClearHtml = (html) => {
	return html.replace(/(<([^>]+)>)/ig, '').substring(0, 90) + '...';
}

export default ClearHtml;