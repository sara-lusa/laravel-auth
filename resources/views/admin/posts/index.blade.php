@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Lista Post</h1>

        <ul>
        @foreach ($posts as $post)
          <li>{{$post->user->name}} - {{$post->title}}
            <a class="btn btn-primary" href="{{route('admin.posts.show', $post)}}">Visualizza</a>
          </li>
        @endforeach
        </ul>

        <a class="btn btn-primary" href="{{route('admin.posts.create')}}">Crea un post</a>
      </div>
    </div>
  </div>
@endsection
