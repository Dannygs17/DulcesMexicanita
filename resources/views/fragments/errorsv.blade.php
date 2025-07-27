{{-- @if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            {{$e}}
        </div>
    @endforeach
@endif --}}

    <div class="text-danger">
       <p><em>{{$message}}</em></p> 
    </div>

