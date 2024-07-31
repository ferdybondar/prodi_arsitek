<div class="row">
    <div class="col md-12">
        <div class="card">
            <div class="card-body">
        <div class="col md-6">
            <a href="/admin/datasiswa/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Data Siswa </a>
            <a href="/admin/datasiswa/cetak" class="btn btn-success mb-3" target="_blank"><i class="fas fa-print"></i> Cetak Data Siswa </a>
        </div>
        <div class="col md-6">
            <div class="form-group">
                <form action="/admin/datasiswa/search" method="get">
                    <div class="input-group">
                        <input type="search" id="inputPassword6" name="query" class="form-control" placeholder="Cari">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </form>
            </div>
        </div>

                    <table class="table table-hover">
                    <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Kelas</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Action</th>
                    </tr>
                    @foreach ($datasiswa as $key => $item)
                    <tr>
                        <td>{{$datasiswa->firstItem() + $key}}</td>
                        <td>{{$item->title}} 
                        <td>{{$item->nis}}
                        <td>{{$item->kelas}}
                        <td>{{$item->tanggal_lahir}}
                        <td>{{$item->alamat}}
                        <td>{{$item->jenis_kelamin}}
                        <td>{{$item->agama}}
                        <td>
                            <div class="d-flex">
                                 <a href="/admin/datasiswa/{{ $item->id }}/edit" class="btn btn-dark mx-2">
                                <i class ="fas fa-edit"></i> Edit</a>
                                     <form action="/admin/datasiswa/{{$item->id}}"method="POST">
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
                <div class="card-body">
                    {{ $datasiswa->links()}}
                    </div>
                </div>    
            </div>
            </div>
        </div>
    </div>
</div>
</div>