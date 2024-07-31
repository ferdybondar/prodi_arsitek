<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                    @if (isset($kelas))
                    <form action="/admin/kelas/{{$kelas->id}}"method="POST">
                        @method('PUT')
                    @else
                        <form action="/admin/kelas"method="POST">
                    @endif
                    @csrf
                <div class="form-group">
                    <label for="">Usia</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Usia" value="{{isset ($kelas) ? $kelas->title : old ('title')}}">
                     @error('title')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                     @enderror
                </div>

                <div class="form-group">
                    <label for="">Nama Kelas</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    placeholder="Kelas" value="{{isset ($kelas) ? $kelas->name : old ('name')}}">
                     @error('name')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                     @enderror
                </div>

                <div class="form-group">
                    <label for="">Nama Pengajar</label>
                    <input type="text" name="desc" class="form-control @error('desc') is-invalid @enderror"
                    placeholder="Pengajar" value="{{isset ($kelas) ? $kelas->desc : old ('desc')}}">
                     @error('desc')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                     @enderror
                </div>

                <!-- <div class="form-group">
                    <label for="">SKS</label>
                    <input type="text" name="body" class="form-control @error('body') is-invalid @enderror"
                    placeholder="SKS" value="{{isset ($kelas) ? $kelas->body : old ('body')}}">
                     @error('body')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                     @enderror
                </div> -->
                
                <button type="submit" class=" btn btn-primary">Simpan</button>
                </form>
                
                
            </div>
        </div>
    </div>
</div>