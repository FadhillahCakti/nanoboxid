@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<h3>Produk (Form Edit)</h3>
<a href="/educationedit"> Kembali</a>
<br/>
<br/>
<form method="post" action="/education/update/{{ $educations ->id }}">
{{ csrf_field() }}
{{ method_field('PUT') }}

							<div class="form-group">
                            <label>Gambar Produk</label>
                            <textarea name="gambar" class="form-control" placeholder="Gambar">{{$educations->gambar}}</textarea>

                            @if($errors->has('gambar'))
                                <div class="text-danger">
                                    {{ $errors->first('gambar')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Nama Produk</label>
                            <textarea name="judul" class="form-control" placeholder="Judul">{{$educations->judul}}</textarea>

                             @if($errors->has('judul'))
                                <div class="text-danger">
                                    {{ $errors->first('judul')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Paragraf Pertama</label>
                            <textarea name="paragraf1" class="form-control" placeholder="paragraf1">{{$educations->paragraf1}}</textarea>

                            @if($errors->has('paragraf1'))
                                <div class="text-danger">
                                    {{ $errors->first('paragraf1')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Paragraf Kedua</label>
                            <textarea name="paragraf2" class="form-control" placeholder="paragraf2">{{$educations->paragraf2}}</textarea>

                            @if($errors->has('paragraf2'))
                                <div class="text-danger">
                                    {{ $errors->first('paragraf2')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Paragraf Ketiga</label>
                            <textarea name="paragraf3" class="form-control" placeholder="paragraf3">{{$educations->paragraf3}}</textarea>

                            @if($errors->has('paragraf3'))
                                <div class="text-danger">
                                    {{ $errors->first('paragraf3')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Paragraf Keempat</label>
                            <textarea name="paragraf4" class="form-control" placeholder="paragraf4">{{$educations->paragraf4}}</textarea>

                            @if($errors->has('paragraf4'))
                                <div class="text-danger">
                                    {{ $errors->first('paragraf4')}}
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
