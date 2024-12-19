
<x-layout>


@if(session('successMessage'))
    <div class="alert alert-success">
        {{ session('successMessage') }}
    </div>
@endif


   <div class="container-fluid vh-100 bg-background">
    <div class="row h-75 justify-content-center align-items-center">
        <div class="col-12">
            <h1 class="text-center display-4 py-5 title ">
            Hello  {{$titolo}}
            </h1>
        </div>
    </div>
   </div>
    

   </x-layout>

