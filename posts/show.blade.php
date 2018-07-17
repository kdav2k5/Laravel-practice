@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-light">Go Back</a>
    <hr>
    <h1 a href="/posts/{{$post->id}}">{{$post->title}}</h1>
    <div>
        <p>{{$post->content}}</p>
    </div>
    <hr> 
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
            <form method ="POST" action="{{ route('posts.destroy', $post->id)}}">
            {{method_field('DELETE') }}
            {{csrf_field() }}
            <input type="submit" class="btn btn-danger float-right" value="Delete Post"></input>
            </form>
        @endif
    @endif


    
   
@endsection