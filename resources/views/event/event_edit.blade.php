@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<h3>Acara (Form Edit)</h3>
<a href="/eventedit"> Kembali</a>
<br/>
<br/>
<form method="post" action="/event/update/{{ $events ->id }}">
{{ csrf_field() }}
{{ method_field('PUT') }}

							<div class="form-group">
                            <label>Gambar Acara</label>
                            <textarea name="gambar" class="form-control" placeholder="Gambar">{{$events->gambar}}</textarea>

                            @if($errors->has('gambar'))
                                <div class="text-danger">
                                    {{ $errors->first('gambar')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Nama Acara</label>
                            <textarea name="judul" class="form-control" placeholder="Judul">{{$events->judul}}</textarea>

                             @if($errors->has('judul'))
                                <div class="text-danger">
                                    {{ $errors->first('judul')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Tanggal Acara</label>
                            <textarea name="tanggal" class="form-control" placeholder="tanggal">{{$events->tanggal}}</textarea>

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
