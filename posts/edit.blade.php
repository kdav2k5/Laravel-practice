@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form method="POST" action="{{route('posts.update', $post->id)}}">
    {{method_field('PATCH') }}
    {{csrf_field() }}

  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title"  placeholder="Title" value="{{$post->title}}"></input>
  </div>
  <div class="form-group">
    <label >Content</label>
    <textarea rows="20" cols="30" type="text" name="content" class="form-control" placeholder="Blog text">{{$post->content}}</textarea>
  </div>
  <input type="submit" class="btn btn-warning" value="submit"></input>
</form>    
@endsection