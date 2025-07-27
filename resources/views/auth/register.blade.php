@extends('layout.main_template')

@section('sectionMain')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-sm p-4" style="width: 100%; max-width: 500px;">
        <h1 class="text-center mb-4">Registro de Usuario</h1>

        {{-- Mostrar errores de validación --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register.handle') }}" method="POST">
            @csrf

            {{-- Nombre --}}
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            {{-- Correo Electrónico --}}
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            {{-- Contraseña --}}
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            {{-- Confirmar Contraseña --}}
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
            </div>

            {{-- Botón --}}
            <div class="d-grid">
                <button type="submit" class="btn btn-success">Registrar</button>
            </div>
        </form>
    </div>
</div>
@endsection
