@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<h3>Produk (Form Edit)</h3>
<a href="/productedit"> Kembali</a>
<br/>
<br/>
<form method="post" action="/product/update/{{ $product ->id }}">
{{ csrf_field() }}
{{ method_field('PUT') }}

							<div class="form-group">
                            <label>Gambar Produk</label>
                            <textarea name="gambar" class="form-control" placeholder="Gambar">{{$product->gambar}}</textarea>

                            @if($errors->has('gambar'))
                                <div class="text-danger">
                                    {{ $errors->first('gambar')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Nama Produk</label>
                            <textarea name="judul" class="form-control" placeholder="Judul">{{$product->judul}}</textarea>

                             @if($errors->has('judul'))
                                <div class="text-danger">
                                    {{ $errors->first('judul')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Harga Produk</label>
                            <textarea name="harga" class="form-control" placeholder="harga">{{$product->harga}}</textarea>

                            @if($errors->has('harga'))
                                <div class="text-danger">
                                    {{ $errors->first('harga')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Link Line Selengkapnya</label>
                            <textarea name="linkline" class="form-control" placeholder="linkline">{{$product->linkline}}</textarea>

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
