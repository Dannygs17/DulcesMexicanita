@extends('layout.main_template')

@section('sectionMain')
<div class="container py-5">

  <div class="text-center bg-warning bg-opacity-25 p-5 rounded-4 shadow-sm mb-5">
    <h1 class="display-3 fw-bold">Dulces <span class="text-danger">"La Mexicanita"</span></h1>
    <p class="lead mt-3">Los mejores dulces artesanales para endulzar tu día</p>
  </div>

  <div class="row">
    @foreach ($products as $product)
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="{{ asset('imgs/products/' . $product->image) }}" class="card-img-top" alt="{{ $product->name_product }}" style="max-height: 200px; object-fit: contain;">
          <div class="card-body">
            <h5 class="card-title">{{ $product->name_product }}</h5>
            <p class="card-text">Precio: ${{ number_format($product->unit_price, 2) }}</p>
            <p class="card-text">Stock: {{ $product->stock }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>

</div>
@endsection
