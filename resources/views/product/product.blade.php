@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')


<p>Untuk Cari Kata Kunci Judul :</p>
<form action="/product/cari" method="GET">
<input type="text" name="cari" placeholder="Cari Judul Disini" value="{{ old('cari') }}">
<input type="submit" value="Cari">
</form>

<div class="container">
	<div class="card mt-5">
	<div class="card-body">
	<h3 class="text-center">Produk Nanobox</h3>
<table class="table table-bordered table-striped">
<tbody>
@foreach($products as $datas)
<tr>
<td><img src="{{ $datas->gambar}}" style="width:75x;height:100px;"></td>
<td><strong>{{ $datas->judul }}</strong></br>
Keterangan :</br> {{ $datas->harga }}</br>
</td>
<td><a href ="{{$datas->linkline}}" class ="btn btn-primary">Selengkapnya</a></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
Halaman : {{ $products->currentPage() }} <br/>
Jumlah Data : {{ $products->total() }} <br/>
Data Per Halaman : {{ $products->perPage() }} <br/>
 
 
{{ $products->links() }}
 @endsection 
</body>
</html>
