@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<h3>Acara (Form Tambah)</h3>
<a href="/eventedit"> Kembali</a>
<br/>
<br/>
<form method="post" action="/event/store">
{{ csrf_field() }}
						<div class="form-group">
                            <label>Gambar Acara</label>
                            <input type="text" name="gambar" class="form-control" placeholder="Gambar">

                            @if($errors->has('gambar'))
                                <div class="text-danger">
                                    {{ $errors->first('gambar')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Nama Acara</label>
                            <input type="text" name="judul" class="form-control" placeholder="Judul">

                             @if($errors->has('judul'))
                                <div class="text-danger">
                                    {{ $errors->first('judul')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Tanggal Acara</label>
                            <input type="text" name="tanggal" class="form-control" placeholder="tanggal">

                            @if($errors->has('tanggal'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

 @endsection 
</body>
</html>
