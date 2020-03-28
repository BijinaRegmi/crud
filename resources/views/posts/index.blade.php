@extends('layouts.app')

@section('content')
    <h3>Posts</h3>
    @if(count($posts)>1)
    @foreach ($posts as $post)
            <div class="well">
                <h3>{{$post->title }}
                </div>
    @endforeach
    @else
    <p>No Posts found</p>
    @endif
     @endsection