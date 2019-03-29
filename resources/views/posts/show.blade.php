@extends('layouts.app')

@section('content')
  <a href="/posts" class="btn btn-default">Go Back</a>
  <img width="100%" src="/storage/cover_images/{{$post->cover_image}}" />
  <br />
  <br />
  <h1>Showing Post - {{$post->title}}</h1>
  <div>
    {!! $post->body !!}
  </div>
  <hr />
  <small>Written on {{$post->created_at}}</small>

  <hr />
  @if (!Auth::guest() && auth()->user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' =>'float-right'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
  @endif

@endsection
