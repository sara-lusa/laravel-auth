@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Post: {{$post->title}}</h1>

        <span>Creato il: {{$post->created_at->format('m-d-Y')}}</span><br>
        <img src="{{asset('storage') . '/' . $post->image_path}}" alt="immagine">
        <p>{{$post->content}}</p>
      </div>
    </div>
  </div>
@endsection
