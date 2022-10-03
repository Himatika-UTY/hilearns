
const GetNameByNim = async (nim) => {
	const response = await fetch(`https://api.himatikauty.com/api/pengurus/${nim}`);
	const data = await response.json();
	return data.data.nama;
}

export default GetNameByNim