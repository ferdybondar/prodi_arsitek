<div class="container">

<div class="text-center my-5">
        <h4 class="">Kontak Kami</h4>
        <p>Berikan Saran dan Masukkan</p>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="/contact/send" method="POST">
                    @csrf
                <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control @error ('name') is-invalid @enderror" 
                name="name" placeholder="Masukkan nama anda">
                    @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
            </div>

                <div class="form-group mt-4">
                <label for="">Isi Pesan</label>
                <textarea name="desc" id="" cols="30" rows="10" 
                class="form-control @error ('desc') is-invalid @enderror" 
                placeholder="Masukkan Pesan Anda"></textarea>
                @error('desc')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>    
                @enderror
            </div>

                    <button type="submit" class="btn btn-dark mt-3">kirim </button>
                    </form>
                </div>
            </div>
            
        </div>

<div class="col-md-6">
    <div class="d-flex">
        <i class="fa fa-phone fa-2x px-3"></i> <h3>000000000000</h3>
    </div>

    <div class="d-flex">
        <i class="fa fa-envelope fa-2x px-3"></i> <h3>Username@gmail.com</h3>
    </div>
</div>

    </div>
</div>