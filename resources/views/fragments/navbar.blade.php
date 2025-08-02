<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <i class="fa-solid fa-gem fa-lg" style="color: #c17710;"></i>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" 
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        {{-- Inicio (visible para todos) --}}
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">
            <i class="fa-solid fa-house fa-bounce"></i> Inicio
          </a>
        </li>

        {{-- Solo Admin (role == 2) puede ver esto --}}
        @if(auth()->check() && auth()->user()->role == 2)
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-store fa-bounce"></i> Dulces
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('products.create') }}"><i class="fa-solid fa-plus fa-bounce"></i> Registrar</a></li>
            <li><a class="dropdown-item" href="{{ route('products.index') }}"><i class="fa-solid fa-box fa-bounce"></i> Inventario</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-tags fa-bounce"></i> Marcas</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-users fa-bounce"></i> Clientes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user-plus fa-bounce"></i> Nuevo</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-address-book fa-bounce"></i> Agenda</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-location-dot fa-bounce"></i> Direcciones</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-cart-shopping fa-bounce"></i> Ventas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-plus fa-bounce"></i> Registrar</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-truck fa-bounce"></i> Salidas</a></li>
          </ul>
        </li>
        @endif
      </ul>

      {{-- Configuración de Inicio de Sesión --}}
      @if(auth()->check())
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                  Logout
                </a>
              </form>
            </li>
          </ul>
        </li>
      </ul>
      @else
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('register') }}">
            <i class="fa-solid fa-user-plus fa-bounce"></i> Registrar
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('login') }}">
            <i class="fa-solid fa-right-to-bracket fa-bounce"></i> Login
          </a>
        </li>
      </ul>
      @endif
      {{-- Fin inicio de sesión --}}
    </div>
  </div>
</nav>
