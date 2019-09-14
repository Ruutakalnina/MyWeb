@extends('layouts.main')
@extends('partials.header')

@section ('saturs')

<a href="/blog/1">
<div class="jumbotron jumbotron-fluid">
  <div class="container-fluid col-md-10 offset-md-2">
    <img class="card-img-top img-fluid" src="img/Acai.jpg" alt="Card image">
    <h1 class="display-4 text-dark">Unlike any berry - Acai bowl</h1>
  </div>
</div>
</a>


<div class="album py-5 bg-light">
    <div class="container">
      <div class="row">

        @foreach ($posts as $postItem)

         @include ('partials.blog-post')

        
        @endforeach

      </div>
    </div>
  </div>

@endsection
