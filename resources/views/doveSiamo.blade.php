<x-layout>
    
    <div class="container-fluid bg-body-secondary vh-100">
        <div class="row h-75 justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center py-5">
                    DOVE SIAMO
                </h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                @foreach ($dati as $dato)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $dato['città'] }}</h5>
                            <p class="card-text">{{ $dato['indirizzo'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    </x-layout>