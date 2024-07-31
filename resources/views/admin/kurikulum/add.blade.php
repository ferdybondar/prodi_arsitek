<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                    @if (isset($kurikulum))
                    <form action="/admin/kurikulum/{{$kurikulum->id}}"method="POST">
                        @method('PUT')
                    @else
                        <form action="/admin/kurikulum"method="POST">
                    @endif
                    @csrf
                <div class="form-group">
                    <label for="">Urutan Waktu</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Urutan Waktu" value="{{isset ($kurikulum) ? $kurikulum->title : old ('title')}}">
                     @error('title')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                     @enderror
                </div>

                <div class="form-group">
                    <label for="">Tema</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    placeholder="Tema" value="{{isset ($kurikulum) ? $kurikulum->name : old ('name')}}">
                     @error('name')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                     @enderror
                </div>

                <div class="form-group">
                    <label for="">Alokasi Waktu</label>
                    <input type="text" name="desc" class="form-control @error('desc') is-invalid @enderror"
                    placeholder="Alokasi Waktu" value="{{isset ($kurikulum) ? $kurikulum->desc : old ('desc')}}">
                     @error('desc')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                     @enderror
                </div>

                <div class="form-group">
                    <label for="">Total Waktu</label>
                    <input type="text" name="body" class="form-control @error('body') is-invalid @enderror"
                    placeholder="Total Waktu" value="{{isset ($kurikulum) ? $kurikulum->body : old ('body')}}">
                     @error('body')
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