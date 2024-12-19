<x-layout>

  



<div class="container-fluid vh-100 bg-background">
  <div class="row h-75 justify-content-center align-items-center">
    <div class="col-12">
      <h1 class="text-center display-4 py-5 title text-white">
        Cosa Sappiamo
      </h1>
      <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi culpa delectus laboriosam odit, fugiat nihil sapiente fuga unde, maxime corporis, hic in beatae sunt mollitia ducimus vitae molestiae labore natus.</p>
    </div>
  </div>
</div>



<section>
  <div class="container d-flex justify-content-center align-items-center userHeight">
    
    
    <div class="container">
      <div class="row justify-content-center align-items-center">
        @foreach ($users as $user )
        <div class="card" style="width: 18rem; margin:5px;">
          <div class="card-body">
            <h5 class="card-title">{{$user['name'] . " "}} {{$user['surname']}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$user['role']}}</h6>
            <a href="{{route('cosaSappiamoDetail' , ['name' => $user['name']])}}" class="card-link">Leggi di più</a>
          </div>
            </div>
            @endforeach
        </div>
      </div>
      
    </div>
  </section>
  
  
  
</x-layout>