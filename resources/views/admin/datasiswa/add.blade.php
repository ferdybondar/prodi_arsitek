<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                    @if (isset($datasiswa))
                    <form action="/admin/datasiswa/{{$datasiswa->id}}"method="POST">
                        @method('PUT')
                    @else
                        <form action="/admin/datasiswa"method="POST">
                    @endif
                    @csrf
               
                    <div class="form-group">
                    <label for="">Nama Siswa</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Siswa" value="{{isset ($datasiswa) ? $datasiswa->title : old ('title')}} ">
                     @error('title')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                     @enderror
                </div>

                <div class="form-group">
                    <label for="">NIS</label>
                    <input type="integer" name="nis" class="form-control @error('nis') is-invalid @enderror"
                    placeholder="Nomor Induk Sekolah" value="{{isset ($datasiswa) ? $datasiswa->nis : old ('nis')}}">  
                    @error('nis')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                     @enderror  
                </div>

                <div class="form-group">
                <label for="">Kelas</label>
                <div col-md-6>
                <select name="kelas" class="form-control">
                    <option value="Kelas Polisi"> Kelas Polisi</option>
                    <option value="Kelas Dokter"> Kelas Dokter</option>
                    <option value="Kelas TNI"> Kelas TNI</option>
                </select>
                </div>
                </div>

                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                    placeholder="Tanggal Lahir" value="{{isset ($datasiswa) ? $datasiswa->tanggal_lahir : old ('tanggal_lahir')}}">
                     @error('tanggal_lahir')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                     @enderror
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                    placeholder="Alamat" value="{{isset ($datasiswa) ? $datasiswa->alamat : old ('alamat')}}">
                     @error('alamat')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                     @enderror
                </div>

                <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <div col-md-6>
                <select name="jenis_kelamin" class="form-control">
                    <option value="Laki-Laki"> Laki-Laki</option>
                    <option value="Perempuan"> Perempuan</option>
                </select>
                </div>
                </div>

                <div class="form-group">
                <label for="">Agama</label>
                <div col-md-6>
                <select name="agama" class="form-control">
                    <option value="Islam"> Islam</option>
                    <option value="Protestan"> Protestan</option>
                    <option value="Khatolik"> Khatolik</option>
                    <option value="Protestan"> Hindu</option>
                    <option value="Protestan"> Budha</option>
                    <option value="khonghucu"> khonghucu</option>
                </select>
                </div>
                </div>
                
                <button type="submit" class=" btn btn-primary">Simpan</button>
                </form>
                
                
            </div>
        </div>
    </div>
</div>