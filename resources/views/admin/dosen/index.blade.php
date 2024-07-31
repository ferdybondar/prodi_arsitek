<div class="row">
    <div class="col md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/dosen/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah </a>
                <table class="table table-bordered table-hover">
                    <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Asal Institusi</th>
                    <th>Action</th>
                    </tr>
                    @foreach ($dosen as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->title}} 
                        <td>{{$item->desc}}
                        <td>
                            <div class="d-flex">
                                 <a href="/admin/dosen/{{ $item->id }}/edit" class="btn btn-dark mx-2">
                                <i class ="fas fa-edit"></i> Edit</a>
                                     <form action="/admin/dosen/{{$item->id}}"method="POST">
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