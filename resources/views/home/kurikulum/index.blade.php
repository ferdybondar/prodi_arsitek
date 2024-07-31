<div class="container">

<div class="text-center">
        <h4 class="">Kurikulum TK. Kemala Bhayangkari 5 Binjai</h4>
    </div>

    <div class="row ">
      <div class="card-body">
      <table class="table table-bordered">
        <tr>
                    <th>No</th>
                    <th>Urutan</th>
                    <th>Nama</th>
                    <th>Alokasi Waktu</th>
                    <th>Jumlah</th>
        </tr>

        @foreach ($kurikulum as $item)

        <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->title}}
                        <td>{{$item->name}} 
                        <td>{{$item->desc}} 
                        <td>{{$item->body}} </td>

        </tr>
      @endforeach
      </table>
    </div>
    </div>
</div>