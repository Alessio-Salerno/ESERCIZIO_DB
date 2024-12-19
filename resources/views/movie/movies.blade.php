<x-layout>



<header class="header">
  <div class="container-fluid h-100">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-6 col-12 text-center">
        <h2 class="text-center text-black">Tutti i film</h2>
      </div>
    </div>

    <div class="row g-4 justify-content-center"> 
      @foreach ($movies as $movie)

        <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center mb-4"> 

         <x-card
         :movie="$movie"

         />

        </div>

      @endforeach
    </div>
  </div>
</header>

</x-layout>