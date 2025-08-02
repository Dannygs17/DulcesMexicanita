@if (session('success'))
<div class="alert alert-success" role="alert">
  {{session('success')}}
</div>
@endif

@if (session('notsuccess'))
<div class="alert alert-warning" role="alert">
{{session('notsuccess')}}
</div>
@endif
