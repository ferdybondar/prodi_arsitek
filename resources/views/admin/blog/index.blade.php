<div class="row">
    <div class="col md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/posts/blog/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah </a>
                <table class="table">
                    <tr>
                    <td>no</td>
                    <td>Gambar</td>
                    <td>Title</td>
                    <td>Kategori</td>
                    <td>Action</td>
                    </tr>
                    @foreach ($blog as $item)
                    <tr>

                        <td>{{$loop->iteration}}</td>
                        <td><img src="/{{$item->cover}}" width="100px" alt=""></td>
                        <td>
                            <a href="/admin/posts/blog/{{$item->id}}"><b>{{$item->title}}</b></a>
                        </td>
                        <td>{{$item->kategori->name}}</td>
                        <td>
                        <div class="d-flex">
                            <a href="/admin/posts/blog/{{ $item->id }}/edit" class="btn btn-dark mx-2">
                                <i class ="fas fa-edit"></i> Edit</a>
                            <form action="/admin/posts/blog/{{$item->id}}"method="POST">
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