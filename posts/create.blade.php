@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form method="POST" action="/posts">
    {{csrf_field() }}
    {{method_field('POST') }}
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title"  placeholder="Title" value=""></input>
  </div>
  <div class="form-group">
    <label >Content</label>
    <textarea rows="20" cols="30" type="text" name="content" class="form-control" placeholder="Blog text"></textarea>
  </div>
  <input type="submit" class="btn btn-warning" value="submit"></input>
</form>    
@endsection