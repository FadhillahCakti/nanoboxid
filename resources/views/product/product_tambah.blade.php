@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<h3>Produk (Form Tambah)</h3>
<a href="/productedit"> Kembali</a>
<br/>
<br/>
<form method="post" action="/product/store">
{{ csrf_field() }}
						<div class="form-group">
                            <label>Gambar Produk</label>
                            <input type="text" name="gambar" class="form-control" placeholder="Gambar">

                            @if($errors->has('gambar'))
                                <div class="text-danger">
                                    {{ $errors->first('gambar')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" name="judul" class="form-control" placeholder="Judul">

                             @if($errors->has('judul'))
                                <div class="text-danger">
                                    {{ $errors->first('judul')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Harga Produk</label>
                            <input type="text" name="harga" class="form-control" placeholder="harga">

                            @if($errors->has('harga'))
                                <div class="text-danger">
                                    {{ $errors->first('harga')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Link Line linkline</label>
                            <input type="text" name="linkline" class="form-control" placeholder="linkline">

                            @if($errors->has('linkline'))
                                <div class="text-danger">
                                    {{ $errors->first('linkline')}}
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
