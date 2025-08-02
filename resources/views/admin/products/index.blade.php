@extends('layout.main_template')


@section('sectionMain')
<h2 class="display-3">Catalogo de Dulces</h2>

<table class="table">
    <thead>
        <th> Nombre del Producto </th>
        <th> Marca </th>
        <th> Cantidad </th>
        <th> Precio </th>
        <th> Imagen </th>
        <th> Acciones </th>
        <th> Creación </th>
    </thead>

    <tbody>
        @foreach ($products as  $p)
        <tr>
            <td>{{$p->name_product}}</td>
            <td>{{$p->brand_id}}</td>
            <td>{{$p->stock}}</td>
            <td>{{$p->unit_price}}</td>
            <td><img src="/imgs/products/{{$p->image}}" width="60" alt="producto"></td>
            <td>             
                <a type="button" class="btn btn-secondary" href="{{route("products.show", $p)}}"> 
                    <i class="fa-solid fa-circle-info"></i> Detalles
                </a>

                <a type="button" class="btn btn-warning" href="{{route("products.edit", $p)}}"> 
                    <i class="fa-solid fa-pen-to-square"></i> Editar
                </a>

                <a type="button" class="btn btn-danger" href="{{route("products.delete", $p)}}"> 
                    <i class="fa-solid fa-trash-can"></i> Eliminar
                </a>
            </td>
            {{-- <td>
                <form action="{{route('products.destroy', $p)}}" method="POST">
                    @method('DELETE')
                    @csrf
                        <button type="submit" class="btn btn-danger"> 
                            <i class="fa-solid fa-trash-can"></i> Eliminar
                        </button>
                </form>
            </td> --}}
            {{-- <td>{{$p->created_at->DiffForHumans()}}</td> --}}
            <td>{{$p->created_at->format('d M Y h:i a')}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
 {{$products->links()}}  {{--Genera los enlace de las paginas  --}}
@endsection
