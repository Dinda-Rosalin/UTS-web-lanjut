@extends('layouts.main')
@section('container')
<body>
    <h1>REVIEW BARANG</h1>
    <a class="btn btn-info" href="/addreview" role="button">Add Review</a>
    @foreach ($daftarbarang as $key => $item)
    <div class="card text-center">
        <div class="card-header">
          Jumlah Terjual {{ $item->barang_terjual }}
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $item->nama_barang }}</h5>
          <p class="card-text">{{ $item->review }}</p>
        </div>
      </div>
    @endforeach
</body>
@endsection