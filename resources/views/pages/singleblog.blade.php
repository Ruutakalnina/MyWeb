@extends('layouts.main')

@section ('saturs')

<div class="container">
    <div class="row">
          
          <img src="/{{ $post->img_url }}" style="width:100%;height:auto;" alt="">

          <h1>{{$post->title}}</h1>
          <div class="body">
              {{$post->body}}
          </div>

          


    </div>
  </div>
@endsection