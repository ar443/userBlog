@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">User Blog!</h1>
                        <p>Enjoy reading our posts. Click on a post to read!</p>
                    </div>
                    @if (Auth::user())
                        
                    <div class="col-4">
                        <p>Create new Post</p>
                        <a href="{{route('create-post')}}" class="btn btn-primary btn-sm">Add Post</a>
                    </div>
                    @endif
                </div>                
                @forelse($posts as $post)
                    <ul>
                        <li><a href="{{route('show-post',$post->id) }}">{{ ucfirst($post->title) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No blog Posts available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection