<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                    @if (isset($dosen))
                    <form action="/admin/dosen/{{$dosen->id}}"method="POST">
                        @method('PUT')
                    @else
                        <form action="/admin/dosen"method="POST">
                    @endif
                    @csrf
                <div class="form-group">
                    <label for="">Nama Dosen</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Nama" value="{{isset ($dosen) ? $dosen->title : old ('title')}}">
                     @error('title')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                     @enderror
                </div>

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" name="desc" class="form-control @error('desc') is-invalid @enderror"
                    placeholder="Asal Institusi" value="{{isset ($dosen) ? $dosen->desc : old ('desc')}}">
                     @error('desc')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                     @enderror
                </div>
                
                <button type="submit" class=" btn btn-primary">Simpan</button>
                </form>
                
                
            </div>
        </div>
    </div>
</div>