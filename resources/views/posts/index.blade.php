@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Lista Post</h1>

        <ul>
        @foreach ($posts as $post)
          <li>{{$post->title}}</li>
        @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection
