<?php

// QUESTO È IL FILE DELLE ROTTE -> UNA ROTTA CORRISPONDE AD UNA VISTA

/*
1 PASSAGGIO -> CREARE LA ROTTA

2 PASSAGGIO -> CREARE LA VISTA

*/

use App\Http\Controllers\docentiController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PublicControllerDue;
use Illuminate\Support\Facades\Route;
// In caso di errore passare -> \App\Http\Controllers\PublicController

// File di routing -> controllo




Route::get('/chiSiamo',[PublicController::class, 'chiSiamo'])->name('chi.siamo'); // METODO PER DARE UN NOME ALLA ROTTA





Route::get('/', function () {
    $titolo = 'HACK124';
    return view('welcome', ['titolo'=> $titolo]); //PASSAGGIO DI DATI ALLA VISTA
})->name('welcome'); // Assegna il nome "welcome" alla route







Route::get('/dove-siamo', function () {
    $dati = [
        
        ['città' => 'Roma', 'indirizzo' => 'Via dei Condotti'],
        ['città' => 'Milano', 'indirizzo' => 'Corso Vittorio Emanuele'],
        ['città' => 'Napoli', 'indirizzo' => 'Via Toledo'],


    
    ];
        
    return view('doveSiamo', ['dati' => $dati]);
})->name('doveSiamo');


// ROUTE COSA SAPPIAMO
Route::get('/cosa-sappiamo', function() {

    $users = [
        ['name'=> 'Mario', 'surname'=> 'Caracciolo' , 'role' => 'Senior Manager'],
        ['name'=> 'Giuseppe', 'surname'=> 'Rossi' , 'role' => 'Capo Due'],
        ['name'=> 'Walter', 'surname'=> 'Bianchi' , 'role' => 'Developer'],
    ];

    // Passa l'array $users alla vista
    return view('cosa-sappiamo', ['users' => $users]);
})->name('cosaSappiamo');


// ROUTE COSA SAPPIAMO (DETAIL)
Route::get('/cosa-sappiamo/detail/{name}', [App\Http\Controllers\PublicControllerDue::class, 'cosa-sappiamo-detail'])->name('cosaSappiamoDetail');

// ROUTE MOVIES 
Route::get('/movies', [PublicControllerDue::class, 'moviesList'])->name('movie.list');

// ROTTA PER MOVIE DETAILS
Route::get('/movie/detail/{id}', [PublicControllerDue::class, 'movieDetail'])->name('movieDetail');



// ROTTA PER INSERIMENTO FILM
Route::get('/movie/create', [PublicControllerDue::class, 'create'])->name('movie.create');


// ROTTA PER SALVARE I DATI
Route::post('/movie/submit', [PublicControllerDue::class, 'store'])->name('movie.submit');


// ORDINE-> ROTTA , CONTROLLO E VISTA
Route::get('/docenti', [docentiController::class, 'docenti'])->name('docenti');

// STUDENTI
Route::get('/studenti/dettaglio/{id}', [PublicController::class, 'dettaglio'])->name('studenti.detail');

// Pagina di dettaglio dei docenti


// ROTTA PARAMETRICA -> rotta che accetta un parametro
Route::get('/docenti/dettaglio/{name}', [docentiController::class, 'dettaglio']) ->name('docente.detail');



