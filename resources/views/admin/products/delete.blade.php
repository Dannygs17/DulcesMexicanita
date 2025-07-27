@extends('layout.main_template')
@section('sectionMain')
<table>
    <thead >
        <p class="display-6">¿Estas seguro que quieres eliminar el productos {{$product->name_product}}?</p>
    </thead>
    <tbody>
        <tr>
            <td>
                <form action="{{route('products.index')}}">
                    <button type="submit" class="btn btn-primary"> 
                        <i class="fa-solid fa-trash-can"></i> Cancelar {{-- Redirecciona a index --}}
                    </button>
                </form>
            </td>

            <td>
                <form action="{{route('products.destroy', $product->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger"> 
                        <i class="fa-solid fa-trash-can"></i> Confirmar {{-- Redirecciona a Destroy y Elimina--}}
                    </button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
@endsection