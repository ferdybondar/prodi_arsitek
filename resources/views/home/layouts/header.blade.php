<style>
  nav{
    background-color:palegreen;
    position: relative;
  }
  .menu-active{
    background-color:chartreuse;
    color:black !important;
    font-weight: bold;
  }
  .navbar-brand img{
    width:60px;
    position: relative;
    border-radius: 60px;
  }

  .nav-link{
    color:black;
    font-size: 20px;
    font-family:fantasy; 
  }

  .navbar-toggler{
    background-color:green;
  }


</style>
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-light fixed-top  ">
  <div class="container">
      <a class="navbar-brand"> <img src="/img/arsitek4.jpg" alt="">TEKNIK ARSITEK UNPAB</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
 
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'menu-active' : ''}}" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('about') ? 'menu-active' : ''}}" href="/about" >Visi & Misi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('services') ? 'menu-active' : ''}}" href="/services">Tentang</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('kurikulum') ? 'menu-active' : ''}}" href="/kurikulum">Kurikulum</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('dosen') ? 'menu-active' : ''}}" href="/dosen">Dosen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('blog*') ? 'menu-active' : ''}}" href="/blog">Postingan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('contact') ? 'menu-active' : ''}}" href="/contact">Saran</a>
          </li>
        </ul>
        <form class="d-flex">
          @auth
            <a href="/admin/dashboard" class="btn btn-success "><i class="fas fa-user px-2"></i>Dashboard</a>
            @else
            <a href="/login" class="btn btn-success "><i class="fas fa-sign-in-alt px-2"></i>Sign</a>
          @endauth
        </form>
      </div>
    </div>
  </nav>
</header>