<div class="container">

<div class="text-center mt-5">
        <h4 class="">Kurikulum Teknik Arsitek</h4>
    </div>

    <div class="row mt-5">
      <div class="card-body">
        <table class="table table-bordered">
        <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Semester</th>
                    <th>SKS</th>
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