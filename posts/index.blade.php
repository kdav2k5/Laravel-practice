@extends('layouts.app')

@section('content')
    <h1>Posts</h1> 
    <hr> 
        @if(count($posts) > 0)
        @foreach( $posts as $post)
            <div class="card card-block bg-faded">
                <h3 href="/posts/{{$post->id}}">{{$post->title}}</h3>
                <p>{{$post->content}}</p>
            </div>
        @endforeach
        @else
            <p>No Posts Found</p>
        @endif 
@endsection