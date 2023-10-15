<div class="container">

<div class="text-center mt-5">
        <h4 class="">Tentang Kami</h4>
        <p>Apa yang Akan Kami Lakukan!</p>
    </div>

    <div class="row mt-5">

    @foreach ($service as $item)
      <div class="col-md-3 my-3">
        <div class="text-center">
      <i class="{{$item->icon}} fa-3x text-danger"></i>
      <h5><b>{{$item->title}}</b></h5>
      {!! Illuminate\Support\Str::limit($item->desc, 100) !!}
      </div>
      </div>

      @endforeach

    </div>
</div>