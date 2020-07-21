@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<div class="card-header text-center">
<a>Untuk Menambah Macam-Macam Acara, </a>
<a href="/event/tambah" class="btn btn-link">Klik Disini</a>
</div>
<div class="card-header text-center">
<a>Untuk Melihat CRUD yang Lainnya, </a>
<a href="/home" class="btn btn-link">Klik Disini</a>
</div>


<div class="container">
	<div class="card mt-5">
	<div class="card-body">
	<h3 class="text-center">Acara with Nanobox (Kolom Edit)</h3>
	<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Isi</th>
						<th scope="col">Lanjutan</th>
                      </tr>
                    </thead>
					<tbody>
@foreach($events as $datas)
<tr>
<td>{{ $datas->id}}</td>
<td><img src="{{ $datas->gambar}}" style="width:75x;height:100px;"></td>
<td>Judul :<br/>{{ $datas->judul }}</br>
Tanggal :</br> {{ $datas->tanggal}}</br>
<td>
<a href="/event/edit/{{ $datas->id }}">Edit</a>
|
<a href="/event/hapus/{{ $datas->id }}">Hapus</a></br></td>
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