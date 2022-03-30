@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="{{ url()->previous() }}" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ ucfirst($post->title) }}</h1>
                <p>{!! $post->body !!}</p>
                <hr>
                @if (Auth::user())
                    @if (Auth::user()->id == $post->user_id)
                        <a href="{{ route('edit-post', $post->id) }}" class="btn btn-outline-primary">Edit Post</a>
                        <br><br>
                        <form id="delete-frm" class="" action="{{ route('delete-post', $post->id) }}"
                            method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Delete Post</button>
                        </form>
                    @endif
                @endif

            </div>
        </div>
    </div>
@endsection
