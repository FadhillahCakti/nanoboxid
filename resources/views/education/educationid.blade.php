@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<div class="text-center">
@foreach($educations as $datas)
<strong>{{ $datas->judul }}</strong></br>
<img src="{{ $datas->gambar}}" style="width:250x;height:500px;"></br>
<p>{{ $datas->paragraf1 }}</p></br>
<p>{{ $datas->paragraf2 }}</p></br>
<p>{{ $datas->paragraf3 }}</p></br>
<p>{{ $datas->paragraf4 }}</p></br>
@endforeach
</div>

 @endsection 
</body>
</html>
