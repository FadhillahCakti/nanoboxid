@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')


<p>Untuk Cari Judul Edukasi :</p>
<form action="/education/cari" method="GET">
<input type="text" name="cari" placeholder="Cari Judul Disini" value="{{ old('cari') }}">
<input type="submit" value="Cari">
</form>

<div class="container">
	<div class="card mt-5">
	<div class="card-body">
	<h3 class="text-center">Edukasi dari Nanobox</h3>
<table class="table table-bordered table-striped">
<tbody>
@foreach($educations as $datas)
<tr>
<td><img src="{{ $datas->gambar}}" style="width:75x;height:100px;"></td>
<td><strong>{{ $datas->judul }}</strong></br></td>
<td><a href ="/education/{{$datas->id}}" class ="btn btn-primary">Selengkapnya</a></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
Halaman : {{ $educations->currentPage() }} <br/>
Jumlah Data : {{ $educations->total() }} <br/>
Data Per Halaman : {{ $educations->perPage() }} <br/>
 
 
{{ $educations->links() }}
 @endsection 
</body>
</html>
