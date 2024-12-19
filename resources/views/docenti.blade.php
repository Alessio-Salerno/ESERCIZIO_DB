<x-layout>


<div class="container-fluid bg-background">
<div class="row justify-content-center align-items-center">
<div class="col-12">
<h1 class="text-center display-4 py-5 title ">
I nostri docenti
</h1>
</div>
</div>
<div class="row justify-content-center ">
@foreach ( $docenti as $docente )
<div class="col-12 col-md-3 py-3">
<div class="card mx-auto" style="width: 18rem;">
  <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$docente['name']}} {{$docente['surname']}} </h5>
    <p class="card-text">{{$docente['materia']}} </p>
    <a href="{{route('docente.detail', ['name' => $docente['name']])}}" class="btn btn-primary">Vai al dettaglio</a>
  </div>
</div>
</div>
@endforeach   
</div>

</div>

</x-layout>