@extends('layouts.app')

@section('content')
      <h1>{{$title}}</h1>
      @if(count($services) > 0)
        <ul>
        @foreach ($services as $service)
          <li>{{$service}}</li>
        @endforeach
        </ul>
      @else
        <p>No Services Found</p>
      @endif
@endsection
