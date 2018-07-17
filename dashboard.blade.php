@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  <a href="/posts/create" class="btn btn-warning justify-content-center">Welcome {{$user->name}}! Here's what you posted:</a>
                  @if(count($user->posts) > 0)
                  <table class="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                        <tr>
                            <td>{{$user->posts}}</td>
                            <td><a href="/posts/{{$user->id}}/edit" class="btn btn-warning">Edit</td>
                            <td><a href="/posts/create" class="btn btn-primary">Create Post</td>
                            <td>
                                <form method ="POST" action="{{ route('posts.destroy', $user->id)}}">
                                    {{method_field('DELETE') }}
                                    {{csrf_field() }}
                                    <input type="submit" class="btn btn-danger float-right" value="Delete Post"></input>
                                </form>
                            </td>
                        </tr>
                  </table>
                  @else
                        <p>No posts yet! You should create a post</p>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
