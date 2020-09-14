@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Lista Post</h1>

        <ul>
        @foreach ($posts as $post)
          <li>{{$post->title}}
            <a class="btn btn-primary" href="{{route('posts.show', $post)}}">Visualizza</a>
          </li>
        @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection
