@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<h3>Edukasi (Form Tambah)</h3>
<a href="/educationedit"> Kembali</a>
<br/>
<br/>
<form method="post" action="/education/store">
{{ csrf_field() }}
						<div class="form-group">
                            <label>Gambar Edukasi</label>
                            <input type="text" name="gambar" class="form-control" placeholder="Gambar">

                            @if($errors->has('gambar'))
                                <div class="text-danger">
                                    {{ $errors->first('gambar')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Judul Edukasi</label>
                            <input type="text" name="judul" class="form-control" placeholder="Judul">

                             @if($errors->has('judul'))
                                <div class="text-danger">
                                    {{ $errors->first('judul')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Paragraf Pertama </label>
                            <input type="text" name="paragraf1" class="form-control" placeholder="paragraf1">

                            @if($errors->has('paragraf1'))
                                <div class="text-danger">
                                    {{ $errors->first('paragraf1')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Paragraf Kedua </label>
                            <input type="text" name="paragraf2" class="form-control" placeholder="paragraf2">

                            @if($errors->has('paragraf2'))
                                <div class="text-danger">
                                    {{ $errors->first('paragraf2')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Paragraf Ketiga </label>
                            <input type="text" name="paragraf3" class="form-control" placeholder="paragraf3">

                            @if($errors->has('paragraf3'))
                                <div class="text-danger">
                                    {{ $errors->first('paragraf3')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Paragraf Keempat</label>
                            <input type="text" name="paragraf4" class="form-control" placeholder="paragraf4">

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
