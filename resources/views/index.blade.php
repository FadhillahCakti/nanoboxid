<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
</head>
<body style="background-color:#f0f8ff">
<nav class="navbar navbar-expand-md navbar-light" style="background-color:#f0f8ff">
        <a class="navbar-brand" href="/">
          <img src="{{('https://scontent.fcgk24-2.fna.fbcdn.net/v/t1.0-9/fr/cp0/e15/q65/110759962_1361393287403913_7216879540623370846_o.jpg?_nc_cat=100&_nc_sid=1480c5&efg=eyJpIjoidCJ9&_nc_ohc=z4N6cZBCnNQAX9fwcic&_nc_ht=scontent.fcgk24-2.fna&tp=14&oh=1bead064fb7d0432452faeb3a0a37df6&oe=5F3DAF17')}}" width="90" height="30" alt="Nanobox">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">

        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/product">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/event">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/education">Education</a>
          </li>
        </ul>
</div>
</nav>

      <h3 class = "text-center"> @yield ('judul_halaman')</h3>

      @yield('konten')
  </body>
</html>