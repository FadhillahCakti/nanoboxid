@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<div class="card-header text-center">
<a>Untuk Menambah Macam-Macam Edukasi, </a>
<a href="/education/tambah" class="btn btn-link">Klik Disini</a>
</div>
<div class="card-header text-center">
<a>Untuk Melihat CRUD yang Lainnya, </a>
<a href="/home" class="btn btn-link">Klik Disini</a>
</div>


<div class="container">
	<div class="card mt-5">
	<div class="card-body">
	<h3 class="text-center">Edukasi dari Nanobox (Kolom Edit)</h3>
	<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Judul</th>
					            	<th scope="col">Lanjutan</th>
                      </tr>
                    </thead>
					<tbody>
@foreach($educations as $datas)
<tr>
<td>{{ $datas->id}}</td>
<td><img src="{{ $datas->gambar}}" style="width:75x;height:100px;"></td>
<td>Judul :<br/>{{ $datas->judul }}</br>
<td>
<a href="/education/edit/{{ $datas->id }}">Edit</a>
|
<a href="/education/hapus/{{ $datas->id }}">Hapus</a></br></td>
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