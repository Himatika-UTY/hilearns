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

const copyText = document.getElementById("copyLink");
const title = 'Belajar Dasar HTML Untuk Pemula';

function copyLink() {
	copyText.select();
	copyText.setSelectionRange(0, 99999);
	navigator.clipboard.writeText(copyText.value);

	Toast.fire({
		icon: 'success',
		title: 'Link berhasil disalin'
	})
}

function shareWa() {
	copyText.select();
	copyText.setSelectionRange(0, 99999);
	navigator.clipboard.writeText(copyText.value);

	const url = "https://api.whatsapp.com/send?text=" + title + " " + copyText.value;
	window.open(url, '_blank');
}

function shareFb() {
	copyText.select();
	copyText.setSelectionRange(0, 99999);
	navigator.clipboard.writeText(copyText.value);

	const url = "https://www.facebook.com/sharer/sharer.php?u=" + copyText.value + "&quote=" + title;
	window.open(url, '_blank');
}

function shareTw() {
	copyText.select();
	copyText.setSelectionRange(0, 99999);
	navigator.clipboard.writeText(copyText.value);

	const url = "https://twitter.com/intent/tweet?text=" + title + "&url=" + copyText.value;
	window.open(url, '_blank');
}

function shareTl() {
	copyText.select();
	copyText.setSelectionRange(0, 99999);
	navigator.clipboard.writeText(copyText.value);

	const url = "https://t.me/share/url?url=" + copyText.value + "&text=" + title;
	window.open(url, '_blank');
}

