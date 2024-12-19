<x-layout>

<div class="container-fluid bg-background">
<div class="row justify-content-center align-items-center">
<div class="col-12">
<h1 class="text-center display-4 py-5 title ">
Dettagli del docente: {{$docente['name']}} {{$docente['surname']}}
</h1>
</div>
</div>
<div class="row justify-content-center align-items-center">


<div class="col-12 col-md-6">
    <img src="https://picsum.photos/200/300" alt="">
</div>

<div class="col-12 col-md-6">
<h2>Matrie insegnate</h2>
<p>{{$docente['materia']}}</p>
</div>

</div>

</div>


</x-layout>