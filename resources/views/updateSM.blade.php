<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Stok Masuk</title>
</head>
<body>
    <h1>Edit Stok Masuk</h1>

@foreach($data as $d)
    <form action="/stokmasuk/updateStokMasuk/{{ $d -> KodeTransaksi }}" method="post">
        {{ csrf_field() }}
        <div class="card mt-4" style="width: 60%; margin: 0 auto;">
            <div class="card-header">Edit Stok Masuk</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="KodeTransaksi">Kode Transaksi : </label></td>
                        <input type="text" class="form-control" name="KodeTransaksi" id="KodeTransaksi" value="{{$d->KodeTransaksi}}" required></td>
                    <div>
                    <div class="form-group">
                        <label for="NamaItem">Nama Item : </label></td>
                        <input type="text" class="form-control" name="NamaItem" id="NamaItem" value="{{$d->NamaItem}}" required></td>
                    </div>
                    <div class="form-group">
                        <label for="Jumlah">Jumlah : </label></td>
                        <input type="text" class="form-control" name="Jumlah" id="Jumlah" value="{{$d->Jumlah}}" required></td>
                    </div>
                </div>
            <button type="submit" name="submit" class="btn bg-primary text-white">Submit</button>
        </div>
    </form>
    @endforeach
	</table>
</body>
</html>