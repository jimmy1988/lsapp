@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  <a href="/posts/create" class="btn btn-primary">Create Post</a>
                  <h3>Your Blog Posts</h3>
                  @if (count($posts) > 0)
                    <table class="table tabe-stripped">
                      <tr>
                        <td>Title</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      @foreach ($posts as $post)
                        <tr>
                          <th>{{$post->title}}</th>
                          <th><a href="posts/{{$post->id}}/edit">Edit</a></th>
                          <th></th>
                        </tr>
                      @endforeach

                    </table>
                  @else
                    <p>
                      No posts have been created for this user
                    </p>
                  @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
