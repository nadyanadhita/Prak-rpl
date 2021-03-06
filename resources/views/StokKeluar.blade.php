<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Stok Keluar</title>
</head>
<body>
    <h1>Stok Keluar</h1>

    <a href="/stokkeluar/tambahSK"> + Tambah Stok Keluar</a>

    <br/>
	<br/>

	<table border="1">
		<tr>
			<th>Kode Transaksi</th>
			<th>Nama Item</th>
			<th>Jumlah</th>
		</tr>
		@foreach($data as $d)
		<tr>
			<td>{{ $d->KodeTransaksi }}</td>
			<td>{{ $d->NamaItem }}</td>
			<td>{{ $d->Jumlah }}</td>
			<td>
				<a href="/stokkeluar/updateSK/{{ $d->KodeTransaksi }}">Edit</a>
				<a href="/stokkeluar/delete/{{ $d->KodeTransaksi }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>