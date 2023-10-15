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
            <h1>Fakultas Teknologi Sosial Dan Sains</h1>
            <h1>Prodi Teknik Arsitek</h1>
            <h2>Universitas Pembangunan Panca Budi</h2>
            <p>Jl. Gatot Subroto No.km, Simpang Tj, Kec. Medan Sunggal, Kota Medan, Sumatera Utara</p>
          </div>
      </div>
    </div>
    <div class="carousel-item carousel-image bg-img-2">
      <div class="container">
        <div class="carousel-caption ">
        <h1>Fakultas Teknologi Sosial Dan Sains</h1>
        <h1>Prodi Teknik Arsitek</h1>
            <h2>Universitas Pembangunan Panca Budi</h2>
            <p>Jl. Gatot Subroto No.km, Simpang Tj, Kec. Medan Sunggal, Kota Medan, Sumatera Utara</p>
           
          </div>
        </div>
      </div>

      <div class="carousel-item carousel-image bg-img-3">
        <div class="container">
          <div class="carousel-caption">
          <h1>Fakultas Teknologi Sosial Dan Sains</h1>
          <h1>Prodi Teknik Arsitek</h1>
            <h2>Universitas Pembangunan Panca Budi</h2>
            <p>Jl. Gatot Subroto No.km, Simpang Tj, Kec. Medan Sunggal, Kota Medan, Sumatera Utara</p>
            
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
            <img src="/img/Ka.Prodi.jpg" height="80%" width="80%" alt="">
            </div>
          </div>
          
          <div class="col mt-5 text-center">
            <div class="card">
            <h3> Ka. Prodi Teknik Arsitektur UNPAB </h3>
            <h5>Dr. Cut Nuraini S.T, M.T</h5>
            <h1></h1>
            <h6>" Pada tahun 2023 menjadi Program Studi Arsitektur yang Unggul di Tingkat Nasional serta berbasis religius dan memberikan manfaat bagi kemaslahatan umat."</h6>
          </div>
          </div>
        </div>
      </div>
    </div> 

    <div class="container">
      <div class="text-center my-5">
        <h4 class="">Artikel</h4>
    </div>
    <div class="row">
    @foreach ($blog as $item)
      <div class="col-md-3 my-3">
        <div class="card shadow-sm">
        <div class="wrapper-card-blog">
          <img src="/{{$item->cover}}" Class="img-card-blog" alt="">
        </div>
        <div class="p-3">
          <a href="/blog/show/{{$item->id}}" class="text-decoration-none"><h5>{{$item->title}}</h5></a>
            <p>{!! Illuminate\Support\Str::limit($item->body, 100) !!} </p>
          <a href="/blog/show/{{$item->id}}">Selengkapnya &RightArrow; </a>
        </div>
      </div>
    </div>

@endforeach
      </div>

  <div class="bg-dark my 2">
    <div class="container py-5">
      <div class="row mt-2">
      <div class="card-body">
      <div class = "google-maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.4972940370741!2d98.64552673785548!3d3.5899571013236313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e30ee18327d%3A0x1633bc2fd434e590!2sPerguruan%20Panca%20Budi!5e0!3m2!1sid!2sid!4v1685327671385!5m2!1sid!2sid" 
      width="100" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
</div>
</div>    
</div>  
          