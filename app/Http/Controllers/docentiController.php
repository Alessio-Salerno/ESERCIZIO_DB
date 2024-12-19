<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class docentiController extends Controller
{
    public function docenti() {
        $arrayDocenti = [
            ['name' => 'Tony', 'surname' => 'Asaro', 'materia' => 'HTML, CSS'],
            ['name' => 'Gabriele', 'surname' => 'Armani', 'materia' => 'BOOTSTRAP'],
            ['name' => 'Giovanni', 'surname' => 'Di Lorenzo', 'materia' => 'JAVASCRIPT'],
            ['name' => 'Beppe', 'surname' => 'Buffa', 'materia' => 'PHP'],
            ['name' => 'Flavio', 'surname' => 'Tranquil', 'materia' => 'LARAVEL'],
    ];

    return view('docenti', ['docenti' => $arrayDocenti]);
}
  public function dettaglio($name){
    
      
    $arrayDocenti = [
        ['name' => 'Tony', 'surname' => 'Asaro', 'materia' => 'HTML, CSS'],
        ['name' => 'Gabriele', 'surname' => 'Armani', 'materia' => 'BOOTSTRAP'],
        ['name' => 'Giovanni', 'surname' => 'Di Lorenzo', 'materia' => 'JAVASCRIPT'],
        ['name' => 'Beppe', 'surname' => 'Buffa', 'materia' => 'PHP'],
        ['name' => 'Flavio', 'surname' => 'Tranquil', 'materia' => 'LARAVEL'],
];
     foreach ($arrayDocenti as $docente ) {
       if($name == $docente['name']){
           return view('dettaglioDocente' , ['docente' => $docente]);
           
        }
     };

  }
}
