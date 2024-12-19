<x-layout>




<header class="header">
  <div class="container-fluid h-100">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-6 col-12 text-center">
        <h2 class="text-center text-black">{{$movie['title']}}</h2>
      </div>
    </div>

    <div class="col-12 col-md-6">

    <h5>{{$movie['title']}}</h5>
    <h6>{{$movie['director']}}</h6>
    <p>{{$movie['genere']}}</p>

    </div>

    <div class="col-12 col-md-6">
     <img src="{{$movie['img']}}" alt="">
    </div>
  
  </div>
</header>

</x-layout>