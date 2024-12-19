<div class="card cardImg" style="width: 18rem;">
            <img src="{{$movie['img']}}" class="card-img-top" alt="poster di `{{$movie['title']}}`" style="height:270px;">
            <div class="card-body">
              <h5 class="card-title">{{$movie['title']}}</h5>
              <h6 class="card-subtitle text-muted">{{$movie['director']}}</h6>
              <p class="card-text">{{$movie['genere']}}</p>
              <a href="{{route('movieDetail', ['id' => $movie['id']])}}" class="btn btn-primary">Leggi di più</a>
            </div>
</div>