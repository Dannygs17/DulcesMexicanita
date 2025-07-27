@extends('layout.main_template')

@section('sectionMain')
<div class="container py-5">

  <div class="text-center bg-warning bg-opacity-25 p-5 rounded-4 shadow-sm mb-5">
    <h1 class="display-3 fw-bold">Dulces <span class="text-danger">"La Mexicanita"</span></h1>
    <p class="lead mt-3">Los mejores dulces artesanales para endulzar tu día</p>
    <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg mt-4">Ver productos</a>
  </div>

  <div class="mb-5">
    @include('fragments.slides')
  </div>
@endsection
