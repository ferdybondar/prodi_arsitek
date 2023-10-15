<div class="row">
    <div class="col md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/posts/kategori/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah </a>
                <table class="table">
                    <tr>
                    <td>no</td>
                    <td>Name</td>
                    <td>Action</td>
                    </tr>
                    @foreach ($kategori as $item)
                    <tr>

                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}
                        <td>
                        <div class="d-flex">
                            <a href="/admin/posts/kategori/{{ $item->id }}/edit" class="btn btn-dark mx-2">
                                <i class ="fas fa-edit"></i> Edit</a>
                            <form action="/admin/posts/kategori/{{$item->id}}"method="POST">
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