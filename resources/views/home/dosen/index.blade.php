<div class="wrapper-hero card">
<img src="/img/guru1.jpg" height="60%" width="100%" alt="" >


<!-- <div class="container">
<div class="row">
<div class="text-center mt-5">
        <h4 class="">Guru TK. Kemala Bhayangkari 5 Binjai</h4>
    </div>
    </div>
    </div> -->

    <!-- <div class="row"> -->
      <div class="card">
      <div class="card-body">
        <div class="text-center">
        <h4>Guru TK. Kemala Bhayangkari 5 Binjai</h4>
      </div>
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
    <!-- </div> -->