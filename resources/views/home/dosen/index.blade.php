<div class="container">

<div class="text-center mt-5">
        <h4 class="">Dosen Teknik Arsitek</h4>
    </div>

    <div class="row mt-5">
      <div class="card-body">
        <table class="table table-bordered">
        <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Asal Institusi</th>
        </tr>

        @foreach ($dosen as $item)

        <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->desc}} </td>
        </tr>
      @endforeach
      </table>
    </div>
    </div>
</div>