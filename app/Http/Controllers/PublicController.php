<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
 public  function chiSiamo(){
        $studenti = [
    
            ['id' => 1, 'name' => 'Leonardo' , 'surname'=>'Asaro'],
            ['id' => 2,'name' =>'Michele', 'surname'=>'Sette'],
            ['id' => 3,'name' =>'Emanuele', 'surname'=>'Di Napoli'],
            
    
        ];
      return view('chiSiamo', ['studenti' => $studenti]); //-> ritorna una vista e va a vedere i file contenuti nella cartella views
    }


public function dettaglio($id){
  $studenti = [
    
    ['id' => 1, 'name' => 'Leonardo' , 'surname'=>'Asaro'],
    ['id' => 2,'name' =>'Michele', 'surname'=>'Sette'],
    ['id' => 3,'name' =>'Emanuele', 'surname'=>'Di Napoli'],
    

];
foreach ($studenti as $studente ) {
  if($id == $studente['id']){
    return view('studenti.detail',['studente'=>$studente]);
  }
}
}


}


