<div class="card-body">
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
    <div class="carousel-inner">
        <div class="carousel-item carousel-image bg-img-1 active">
          <div class="container">
            <div class="carousel-caption ">
            <h1>TK. Kemala Bhayangkari 5 Binjai</h1>
            <h1></h1>
            <h2></h2>
            <p>Jl. Veteran No. 3, Tangsi, Kec. Binjai Kota, Kota Binjai, Sumatera Utara</p>
          </div>
      </div>
    </div>
    <div class="carousel-item carousel-image bg-img-2">
      <div class="container">
        <div class="carousel-caption ">
        <h1>TK. Kemala Bhayangkari 5 Binjai</h1>
        <h1></h1>
            <h2></h2>
            <p>Jl. Veteran No. 3, Tangsi, Kec. Binjai Kota, Kota Binjai, Sumatera Utara</p>
           
          </div>
        </div>
      </div>

      <div class="carousel-item carousel-image bg-img-3">
        <div class="container">
          <div class="carousel-caption">
          <h1>TK. Kemala Bhayangkari 5 Binjai</h1>
          <h1></h1>
            <h2></h2>
            <p>Jl. Veteran No. 3, Tangsi, Kec. Binjai Kota, Kota Binjai, Sumatera Utara</p>
            
          </div>
        </div>
      </div>
    </div>
   </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> 

  </div>

<div class="bg-success my-2">
  <div class="container py-2">
        <div class="row mt-2">
        
          <div class="col-md-3 ">
            <div class="card-body">
            <img src="/img/kepala sekolah.jpeg" height="80%" width="80%" alt="">
            </div>
          </div>
          
          <div class="col mt-5 text-center">
            <div class="card">
            <h3> KA. Sekolah </h3>
            <h5>Melati Indah S.Pd</h5>
            <h1></h1>
            <h6>" Pada tahun 2024 menjadi Sekolah yang Unggul di Tingkat Nasional serta berbasis religius dan memberikan manfaat bagi kemaslahatan masyarakat dan juga Kami selaku pimpinan sekolah mengucapkan terima kasih kepada tim pembuat Website ini 
              yang telah berusaha untuk dapat lebih memperkenalkan segala perihal yang dimiliki oleh sekolah."</h6>
          </div>
          </div>
        </div>
      </div>
    </div> 

    <div class="container">
      <div class="text-center my-5">
        <h4 class="">Postingan</h4>
    </div>

    <div class="row">
    @foreach ($blog as $item)
      <div class="col-md-3 my-3">
        <div class="card shadow-sm">
        <div class="wrapper-card-blog">
          <img src="/{{$item->cover}}" class="img-card-blog" alt="">
        </div>
        <div class="p-3">
          <a href="/blog/show/{{$item->id}}" class="text-decoration-none"><h5>{{$item->title}}</h5></a>
            <!-- <p>{!! Illuminate\Support\Str::limit($item->body, 10) !!} </p> -->
          <a href="/blog/show/{{$item->id}}">Selengkapnya &RightArrow; </a>
        </div>
      </div>
    </div>
@endforeach
</div>
</div>

  <div class="bg-dark my 2">
    <div class="container py-5">
      <div class="row mt-2">
      <div class="card-body">
      <div class = "google-maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.4816373635149!2d98.48028179946337!3d3.6042915673539855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3030d61f06f494b1%3A0x1e5a6b9e76370667!2sTK%20Kemala%20Bhayangkari%205%20Binjai!5e0!3m2!1sen!2sid!4v1720798574722!5m2!1sen!2sid "width="100" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
</div>
</div>    
</div>
          