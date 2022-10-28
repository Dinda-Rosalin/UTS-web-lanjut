@extends('layouts.main')
@section('container')

<body>
    <h1>Menu Makanan</h1>
    <table class="table table-borderless mt-5">
      <?php $i = 1?>
      @foreach ($allBarang as $key => $barang)
      @if($i == 1 OR $i==4)
      <tr>
      @endif
        <td>  
          <div class="card" style="width: 18rem;">
            <img src="{{ asset('images') }}/{{ $barang->photo }}" class="card-img-top" alt="{{ $barang->photo }}">
            <div class="card-body">
              <h5 class="card-title">{{ $barang->nama_barang }}</h5>
              <p class="card-text">Rp. {{ $barang->harga_barang }}</p>
              <a href="{{ route('review', $barang->id_barang) }}" class="btn btn-primary">Lihat Review</a>
            </div>
          </div>
        </td>
      @if ( $i == 3)
        </tr>  
      @endif
      <?php $i++; ?>
      @if ( $i == 4)
        <?php $i =1; ?> 
      @endif
     @endforeach
  </table>
</body>
@endsection