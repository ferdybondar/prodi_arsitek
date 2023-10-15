<div class="row">
    <div class="col md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/kurikulum/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah </a>
                <table class="table table-bordered">
                    <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Action</th>
                    
                    </tr>
                    @foreach ($kurikulum as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->title}}
                        <td>{{$item->name}}
                        <td>{{$item->desc}} 
                        <td>{{$item->body}} 
                        <td>
                            <div class="d-flex">
                                 <a href="/admin/kurikulum/{{ $item->id }}/edit" class="btn btn-dark mx-2">
                                <i class ="fas fa-edit"></i> Edit</a>
                                     <form action="/admin/kurikulum/{{$item->id}}"method="POST">
                                     @method('delete')
                                     @csrf
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                                    </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>