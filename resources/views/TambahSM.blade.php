<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Stok Masuk Baru</title>
</head>
<body>
    <h1>Stok Masuk</h1>

    <a href="/stokmasuk"> Kembali</a>
	
	<br/>
	<br/>
	<form action="/stokmasuk/tambahStokMasuk" method="post">
		{{ csrf_field() }}
        <tr>
            <td><label for="KodeTransaksi">Kode Transaksi </label></td>
            <td><input type="text" name="KodeTransaksi" id="KodeTransaksi" required></td>
        </tr>
        <tr>
            <td><label for="NamaItem">Nama Item : </label></td>
            <td><input type="text" name="NamaItem" id="NamaItem" required></td>
        </tr>
        <tr>
            <td><label for="Jumlah">Jumlah : </label></td>
            <td><input type="text" name="Jumlah" id="Jumlah" required></td>
        </tr>
        <button type="submit" name="submit" class="btn bg-primary text-white">Submit</button>
	</form>
</body>
</html>