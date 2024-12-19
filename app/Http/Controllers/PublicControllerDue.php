<?php


    
    namespace App\Http\Controllers;
    
    use App\Models\Movie;
    use Illuminate\Http\Request;
    
    // NUOVO PUBLIC CONTROLLER PER SELFWORK LARAVEL
    class PublicControllerDue extends Controller
    {
        public function detail($name)
        {
            $users = [
                ['name'=> 'Mario', 'surname'=> 'Caracciolo', 'role' => 'Senior Manager'],
                ['name'=> 'Giuseppe', 'surname'=> 'Rossi', 'role' => 'Capo Due'],
                ['name'=> 'Walter', 'surname'=> 'Bianchi', 'role' => 'Developer'],
            ];
            
            foreach ($users as $user) {
                if ($name == $user['name']) {
                    return view('cosa-sappiamo-detail', ['user' => $user]);
                }
            }
            
            // Se l'utente non viene trovato, puoi restituire una vista di errore o un messaggio
            return abort(404, 'User not found');
        }
        
        public function moviesList(){
            
            // $movies = [
            //     ['id' =>'1', 'title' =>'Doctor Bave', 'director' =>'Razonate',  'img' =>'https://picsum.photos/200/300', 'genere' =>'Fantascienza' ],
            //     ['id' =>'2', 'title' =>'Mafia di oggi', 'director' =>'Biden',  'img' =>'https://picsum.photos/200/300', 'genere' => 'Politica'],
            //     ['id' =>'3', 'title' =>'Venom 4', 'director' =>'Trump',  'img' =>'https://picsum.photos/200/300', 'genere' => 'Horror' ],
            //     ['id' =>'4', 'title' =>'Spider man', 'director' =>'La Russa',  'img' =>'https://picsum.photos/200/300', 'genere' => 'Comico' ],
            //     ['id' =>'5', 'title' =>'Stranger things', 'director' =>'Vannacci',  'img' =>'https://picsum.photos/200/300', 'genere' => 'Europeo' ],
            // ];
            
            $movies = Movie::all();
            return view('movie.movies', ['movies'=>$movies]);
            


        }


        // public function movieDetail($id){
        //     $movies = [
        //         ['id' =>'1', 'title' =>'Doctor Bave', 'director' =>'Razonate',  'img' =>'https://picsum.photos/200/300', 'genere' =>'Fantascienza' ],
        //         ['id' =>'2', 'title' =>'Mafia di oggi', 'director' =>'Biden',  'img' =>'https://picsum.photos/200/300', 'genere' => 'Politica'],
        //         ['id' =>'3', 'title' =>'Venom 4', 'director' =>'Trump',  'img' =>'https://picsum.photos/200/300', 'genere' => 'Horror' ],
        //         ['id' =>'4', 'title' =>'Spider man', 'director' =>'La Russa',  'img' =>'https://picsum.photos/200/300', 'genere' => 'Comico' ],
        //         ['id' =>'5', 'title' =>'Stranger things', 'director' =>'Vannacci',  'img' =>'https://picsum.photos/200/300', 'genere' => 'Europeo' ],
        //     ];
        
        //     // Cerca il film con l'id specificato
        //     foreach ($movies as $movie) {
        //         if ($id == $movie['id']) {
        //             // Passa il film trovato alla vista 'movie-detail'
        //             return view('movie-detail', ['movie' => $movie]);
        //         }
        //     }
        
        //     // Se non trova il film, mostra un errore 404
        //     abort(404, 'Film non trovato');
        
        // }

 
        public function create(){
            return view('movie.create');
        }

        public function store(Request $request){
            $movie = Movie::create([
                'title' => $request->title,
                'director' => $request->director,
                'genere' => $request->genere
            ]);
            
        
            return redirect()->route('welcome')->with('successMessage', 'Hai correttamente inserito il film');
      }
        
        
    }
    