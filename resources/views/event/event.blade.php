@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')


<p>Untuk Cari Judul :</p>
<form action="/event/cari" method="GET">
<input type="text" name="cari" placeholder="Cari Judul Disini" value="{{ old('cari') }}">
<input type="submit" value="Cari">
</form>

<div class="container">
	<div class="card mt-5">
	<div class="card-body">
	<h3 class="text-center">Acara with Nanobox</h3>
<table class="table table-bordered table-striped">
<tbody>
@foreach($events as $datas)
<tr>
<td><img src="{{ $datas->gambar}}" style="width:75x;height:100px;"></td>
<td><strong>Judul :</br>{{ $datas->judul }}</strong></br>
Tanggal :</br> {{ $datas->tanggal }}</br>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
Halaman : {{ $events->currentPage() }} <br/>
Jumlah Data : {{ $events->total() }} <br/>
Data Per Halaman : {{ $events->perPage() }} <br/>
 
 
{{ $events->links() }}
 @endsection 
</body>
</html>
