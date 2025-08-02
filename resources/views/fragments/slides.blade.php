<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-inner rounded shadow-sm">
    <div class="carousel-item active">
      <img src="{{ asset('imgs/slides/Imagen1.jpg') }}" class="d-block w-100" alt="Imagen 1" loading="lazy" style="object-fit: cover; height: 400px;">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imgs/slides/Imagen2.jpg') }}" class="d-block w-100" alt="Imagen 2" loading="lazy" style="object-fit: cover; height: 400px;">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imgs/slides/Imagen3.jpg') }}" class="d-block w-100" alt="Imagen 3" loading="lazy" style="object-fit: cover; height: 400px;">
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
