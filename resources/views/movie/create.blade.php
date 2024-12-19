<x-layout>

<div class="container-fluid">
    <div class="row">
        <h2>Inserisci il film preferito:</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">

        <form method="POST" action="{{route('movie.submit')}}">
            @csrf
    <!-- TITOLO -->
  <div class="mb-3">
    <label for="title" class="form-label">Titolo:</label>
    <input type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp">
  </div>

    <!-- REGISTA -->
  <div class="mb-3">
    <label for="director" class="form-label">Regista:</label>
    <input type="text" name="director" class="form-control" id="director" aria-describedby="titleHelp">
  </div>

    <!-- GENERE -->
  <div class="mb-3">
    <label for="genere" class="form-label">Regista:</label>
    <input type="text" name="genere" class="form-control" id="genere" aria-describedby="titleHelp">
  </div>


  <button type="submit" class="btn btn-primary">Inserisci il film</button>
</form>

        </div>
    </div>
</div>


</x-layout>