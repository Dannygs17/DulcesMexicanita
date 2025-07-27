@extends('layout.main_template')

@section('sectionMain')

<h2 class="display-3">Detalles</h2>

<h3>Producto:{{$product->name_product}}</h3>
<h3>Cantidad:{{$product->stock}} </h3>
<h3>Precio:{{$product->unit_price}} </h3>
<h3>Imagen:{{$product->image}} </h3>
{{-- TODO Mostrar Imagen --}}
<a type="button" class="btn btn-outline-primary" href="{{route("products.index")}}">Regresar</a>

@endsection