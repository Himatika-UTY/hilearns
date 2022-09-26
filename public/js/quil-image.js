Quill.register("modules/imageUploader", ImageUploader);
var quill = new Quill('#editor', {
	theme: 'snow',
	modules: {
		syntax: true,
		toolbar: [
			[{ header: [1, 2, 3, 4, 5, 6, false] }],
			[{ font: [] }],
			["bold", "italic"],
			["link", "blockquote", "code-block", "image"],
			[{ list: "ordered" }, { list: "bullet" }],
			[{ script: "sub" }, { script: "super" }],
			[{ color: [] }, { background: [] }],
		],
		imageUploader: {
			upload: file => {
				return new Promise((resolve, reject) => {
					const formData = new FormData();
					formData.append("image", file);

					fetch("https://api.imgbb.com/1/upload?key=7ec15d767dbae8c6d3efeda66b2a6121", {
							method: "POST",
							body: formData
						}
					)
					.then(response => response.json())
					.then(result => {
						console.log(result);
						resolve(result.data.display_url);
					})
					.catch(error => {
						reject("Upload failed");
						console.error("Error:", error);
					});
				});
			},
		}
	},
});
quill.on('text-change', function(delta, oldDelta, source) {
   document.querySelector("input[name='content']").value = quill.root.innerHTML;
});