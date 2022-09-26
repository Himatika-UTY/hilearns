const Toast = Swal.mixin({
	toast: true,
	position: 'top-end',
	showConfirmButton: false,
	timer: 3000,
	timerProgressBar: true,
	didOpen: (toast) => {
		toast.addEventListener('mouseenter', Swal.stopTimer)
		toast.addEventListener('mouseleave', Swal.resumeTimer)
	}
})


export function copyLink(link) {
	navigator.clipboard.writeText(link);

	Toast.fire({
		icon: 'success',
		title: 'Link berhasil disalin'
	})
}

export function shareWa(link) {
	const url = `https://api.whatsapp.com/send?text=${link}`;
	window.open(url, '_blank');
}

export function shareFb(link) {
	const url = `https://www.facebook.com/sharer/sharer.php?u=${link}`;
	window.open(url, '_blank');
}

export function shareTw(link) {
	const url = `https://twitter.com/intent/tweet?text=${link}`;
	window.open(url, '_blank');
}

export function shareTl(link) {
	const url = `https://t.me/share/url?url=${link}`;
	window.open(url, '_blank');
}

