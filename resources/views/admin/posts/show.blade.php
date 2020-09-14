@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Post: {{$post->title}}</h1>
        <h3>by {{$post->user->name}}</h3>
        <span>Creato il: {{$post->created_at->format('m-d-Y')}}</span>

        <p>{{$post->content}}</p>
      </div>
    </div>
  </div>
@endsection
