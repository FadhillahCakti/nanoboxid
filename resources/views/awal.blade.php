@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <title>Nanobox</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
</head>
<style>
a.promotion-btn {
  /* other styles */
  display: block;
  width: 100px;
  margin-left: auto;
  margin-right: auto;
}
.success {background-color: yellow;} 
</style>
<body style="background-color:#f0f8ff">
@section('konten')

<!----Carousel Content--->
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="background-color:#f0f8ff">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="https://scontent.fcgk24-2.fna.fbcdn.net/v/t1.0-9/fr/cp0/e15/q65/110161993_1361393484070560_8537329058688791475_o.jpg?_nc_cat=100&_nc_sid=1480c5&efg=eyJpIjoidCJ9&_nc_ohc=tihja5OMnGgAX-pUeFs&_nc_ht=scontent.fcgk24-2.fna&tp=14&oh=f1946810ece4b0afdba62102ae7cac73&oe=5F3A6AA7" width="2000" height="600" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Produk Nanobox</h1>
                <p>Untuk Melihat Produk-Produk Kami</p>
                <p><a class="btn btn-lg btn-primary" href="/product" role="button">Klik Disini</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="https://scontent.fcgk24-1.fna.fbcdn.net/v/t1.0-9/fr/cp0/e15/q65/110169810_1361393577403884_1636737847279965957_o.jpg?_nc_cat=101&_nc_sid=1480c5&efg=eyJpIjoidCJ9&_nc_ohc=L4jvnb3ev_4AX8KuqRD&_nc_ht=scontent.fcgk24-1.fna&tp=14&oh=2c33ae2dd9b8734cfd16e42e1c3725a2&oe=5F3AEB80" width="2000" height="600" alt="Second slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Acara Bersama Nanobox</h1>
                <p>Untuk Melihat Acara-Acara Kami</p>
                <p><a class="btn btn-lg btn-primary" href="/event" role="button">Klik Disini</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="https://scontent.fcgk24-2.fna.fbcdn.net/v/t1.0-9/fr/cp0/e15/q65/109251672_1361393670737208_2299265399157852408_o.jpg?_nc_cat=104&_nc_sid=1480c5&efg=eyJpIjoidCJ9&_nc_ohc=mH-GlJwxzscAX8nGuxZ&_nc_ht=scontent.fcgk24-2.fna&tp=14&oh=af4ffa6072da145185b1acb2849f3677&oe=5F3DA7A2" width="2000" height="600" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Edukasi dari Nanobox</h1>
                <p>Untuk Melihat Edukasi-Edukasi dari Kami</p>
                <p><a class="btn btn-lg btn-primary" href="/education" role="button">Klik Disini</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

</br></br></br>

<!----Moto Nanobox--->

<h1 class="text-center">Nanotechnology is Changing The World</h1></br>

  <h5 class='text-center'>
  We develop and catalogue the products that make people better at their most important work. The kind of work you read about on the frontpage of the newspaper, not just the technology section.
  </h5>

<div class="row">
<div class="col-sm-4">
  <img src="https://scontent.fcgk24-2.fna.fbcdn.net/v/t1.0-9/fr/cp0/e15/q65/110174900_1361393777403864_8938291624231169993_n.jpg?_nc_cat=107&_nc_sid=1480c5&efg=eyJpIjoidCJ9&_nc_ohc=hrq0JbO5wCkAX_pxTp8&_nc_ht=scontent.fcgk24-2.fna&tp=14&oh=5cdd48962f47134075608990482eded0&oe=5F3ABDF1" class="rounded mx-auto d-block" alt="Icon 1" width="90" height="90">
  <h6 class='text-center'>LIMITLESS SCALABILITY</h6></div>

<div class="col-sm-4">
  <img src="https://scontent.fcgk24-2.fna.fbcdn.net/v/t1.0-9/fr/cp0/e15/q65/110101956_1361393867403855_3950877301054712483_n.jpg?_nc_cat=107&_nc_sid=1480c5&efg=eyJpIjoidCJ9&_nc_ohc=YGMKYTTZCxYAX_8YqNd&_nc_ht=scontent.fcgk24-2.fna&tp=14&oh=9c46ad807fdfe48d812867fa6445922e&oe=5F3CEFF8" class="rounded mx-auto d-block" alt="Icon 2" width="90" height="90">
  <h6 class='text-center'>CONSERVATION OF RESOURCES</</h6></div>

<div class="col-sm-4">
  <img src="https://scontent.fcgk24-1.fna.fbcdn.net/v/t1.0-9/fr/cp0/e15/q65/110165529_1361442087399033_5161457264886086060_n.jpg?_nc_cat=101&_nc_sid=1480c5&efg=eyJpIjoidCJ9&_nc_ohc=7wQu4Vj2sXsAX8uV98A&_nc_ht=scontent.fcgk24-1.fna&tp=14&oh=cd8b1da608ae0597999ad909e2d58224&oe=5F3DD4AB" class="rounded mx-auto d-block" alt="Icon 3" width="90" height="90">
  <h6 class='text-center'>LESS POLLUTION</</h6></div>

<div class="col-sm-4">
  <img src="https://scontent.fcgk24-1.fna.fbcdn.net/v/t1.0-9/fr/cp0/e15/q65/115750569_1361394020737173_6953211397013277327_n.jpg?_nc_cat=108&_nc_sid=1480c5&efg=eyJpIjoidCJ9&_nc_ohc=uwf-xgwld4UAX8c73UA&_nc_ht=scontent.fcgk24-1.fna&tp=14&oh=b83aca3676e89319c96d35bcde462841&oe=5F3D3A21" class="rounded mx-auto d-block" alt="Icon 4" width="90" height="90">
  <h6 class='text-center'>STRONGER, DURABLE <br/>& LIGHTER MATERIAL</</h6></div>

<div class="col-sm-4">
  <img src="https://scontent.fcgk24-1.fna.fbcdn.net/v/t1.0-9/fr/cp0/e15/q65/110099463_1361394127403829_4735452024997507382_n.jpg?_nc_cat=108&_nc_sid=1480c5&efg=eyJpIjoidCJ9&_nc_ohc=_LczE-NaD5cAX9Ru48M&_nc_ht=scontent.fcgk24-1.fna&tp=14&oh=cd7d280ecc89c2888065a6d5bc93a760&oe=5F3B28F7" class="rounded mx-auto d-block" alt="Icon 5" width="90" height="90">
  <h6 class='text-center'>MORE EFFICIENT</</h6></div>

<div class="col-sm-4">
  <img src="https://scontent.fcgk24-2.fna.fbcdn.net/v/t1.0-9/fr/cp0/e15/q65/110085874_1361392687403973_8236867148143665054_n.jpg?_nc_cat=100&_nc_sid=1480c5&efg=eyJpIjoidCJ9&_nc_ohc=m_aZo9sAuUsAX_tdZvG&_nc_ht=scontent.fcgk24-2.fna&tp=14&oh=72c565cdf32e1f12efc1596b5cf32691&oe=5F3C6D3E" class="rounded mx-auto d-block" alt="Icon 6" width="90" height="90">
  <h6 class='text-center'>GLOBAL ANNUAL SAVING OF CO 2</</h6></div>
</div>
</br></br></br>

<!----Produk Nanobox (Tampilkan 6 Saja)--->
<h1 class="text-center">Produk-Produk Nanobox</h1></br>
<div class="row">
<div class="col-md-3">
  <img src="https://cms.nanobox.id/assets/nanobox/uploads/6.%20Titanium%20dioxide%20%28anatase%20type%29.jpg" alt="Icon 1" width="400" height="200">
  <h6 class="text-center">Titanium Oksida</h6></div>
  <td><a href ="http://line.me/ti/p/@827jzxdi" class ="btn btn-primary">Pesan Disini</a></td>

<div class="col-md-3">
  <img src="https://cms.nanobox.id/assets/nanobox/uploads/29.%20c%20sport-vest-female.jpg" alt="Icon 2" width="400" height="200">
  <h6 class="text-center">C Sport Vest Female</</h6></div>
  <td><a href ="http://line.me/ti/p/@827jzxdi" class ="btn btn-primary">Pesan Disini</a></td>

<div class="col-md-3">
  <img src="https://cms.nanobox.id/assets/nanobox/uploads/9.%20Proflavo.jpg" alt="Icon 3" width="400" height="200">
  <h6 class="text-center">Proflavo 1 Liter</</h6></div>
  <td><a href ="http://line.me/ti/p/@827jzxdi" class ="btn btn-primary">Pesan Disini</a></td>
  
<div class="col-md-3">
  <img src="https://cms.nanobox.id/assets/nanobox/uploads/4.%20Zinc%20dioxide.jpg" alt="Icon 4" width="400" height="200">
  <h6 class="text-center">Zink Oksida</</h6></div>
  <td><a href ="http://line.me/ti/p/@827jzxdi" class ="btn btn-primary">Pesan Disini</a></td>

<div class="col-md-3">
  <img src="https://cms.nanobox.id/assets/nanobox/uploads/31.%20c%20sport%20relaxing%20pants.jpg" alt="Icon 5" width="400" height="200">
  <h6 class="text-center">C Sport Celana Santai</</h6></div>
  <td><a href ="http://line.me/ti/p/@827jzxdi" class ="btn btn-primary">Pesan Disini</a></td>

<div class="col-md-3">
  <img src="https://cms.nanobox.id/assets/nanobox/uploads/9.%20Proflavo.jpg" alt="Icon 6" width="400" height="200">
  <h6 class="text-center">Proflavo 10 ml/</h6></div>
  <td><a href ="http://line.me/ti/p/@827jzxdi" class ="btn btn-primary">Pesan Disini</a></td>
</div></br>
<div class="center">
  <a href="/product" class="promotion-btn success">Klik Untuk Selengkapnya</a>
</div>
</br></br></br>

<!----Event Nanobox (Tampilkan 3 Saja)--->
<h1 class="text-center">Acara with Nanobox</h1></br>
<div class="row">
<div class="col-md-3">
  <img src="https://scontent.fcgk24-1.fna.fbcdn.net/v/t1.0-9/fr/cp0/e15/q65/110169798_1361647780711797_4084494263458703871_o.jpg?_nc_cat=102&_nc_sid=1480c5&efg=eyJpIjoidCJ9&_nc_ohc=y8S-figt8uQAX9tihlL&_nc_ht=scontent.fcgk24-1.fna&tp=14&oh=e438223187ee718f6ec2a6ab9cf15f36&oe=5F3E1B4F" alt="Icon 1" width="500" height="300">
</div> 
<div class="col-md-3">
  <img src="https://scontent.fcgk24-1.fna.fbcdn.net/v/t1.0-9/fr/cp0/e15/q65/111358373_1361648137378428_77387386589100298_o.jpg?_nc_cat=109&_nc_sid=1480c5&efg=eyJpIjoidCJ9&_nc_ohc=1TEmrKmGRCoAX86Lxgo&_nc_ht=scontent.fcgk24-1.fna&tp=14&oh=89f5622d8359681f717eba223037c177&oe=5F3D5503" alt="Icon 2" width="500" height="300">
</div>
<div class="col-md-3">
  <img src="https://scontent.fcgk24-2.fna.fbcdn.net/v/t1.0-9/fr/cp0/e15/q65/110288694_1361820450694530_5442357677978443551_o.jpg?_nc_cat=105&_nc_sid=1480c5&efg=eyJpIjoidCJ9&_nc_ohc=BZa1B5QBUS8AX9R9PZU&_nc_ht=scontent.fcgk24-2.fna&tp=14&oh=9995b56748a37f00c6bba71886fda7cd&oe=5F3DBAD9" alt="Icon 3" width="500" height="300">
</div>  
</div></br>
<div class="center">
  <a href="/event" class="promotion-btn success">Klik Untuk Selengkapnya</a>
</div>
</br></br></br>



<!----Education Nanobox (Tampilkan 3 Saja)--->
<h1 class="text-center">Edukasi dari Nanobox</h1></br>
<div class="row">
<div class="col-md-3">
  <img src="https://cms.nanobox.id/assets/nanobox/uploads/coverfile_1561603956_C.jpg" alt="Icon 1" width="400" height="200">
  <h6 class="text-center">Nano Silver Sebagai Cairan Anti Bakteri</h6></div>
  <td><a href ="/" class ="btn btn-primary">Pesan Disini</a></td>

<div class="col-md-3">
  <img src="https://cms.nanobox.id/assets/nanobox/uploads/29.%20c%20sport-vest-female.jpg" alt="Icon 2" width="400" height="200">
  <h6 class="text-center">C Sport Vest Female</</h6></div>
  <td><a href ="/" class ="btn btn-primary">Pesan Disini</a></td>

<div class="col-md-3">
  <img src="https://cms.nanobox.id/assets/nanobox/uploads/9.%20Proflavo.jpg" alt="Icon 3" width="400" height="200">
  <h6 class="text-center">Proflavo 1 Liter</</h6></div>
  <td><a href ="/" class ="btn btn-primary">Pesan Disini</a></td>
  
</div></br>
<div class="center">
  <a href="/education" class="promotion-btn success">Klik Untuk Selengkapnya</a>
</div>
</br></br></br>


@endsection 
</body>
</html>
