@extends('layouts.main')

@section ('saturs')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <img class="card-img-top" src="img/Main.jpg" alt="Card image">
        <h1 class="display-4">Koko&Nut Co.</h1>
        <p class="lead">smoothie bowls</p>
        <hr class="my-4">
        <p>Vitamīniem bagātās smūtiju bļodas!</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Uzzināt vairāk</a>
    </div>
</div>


<div class="container">
    <div class="row">
        <h1>Menu</h1>
          
        @foreach ($posts as $postItem)

         @include ('partials.blog-post')
        
        @endforeach

    </div>
</div>

@endsection