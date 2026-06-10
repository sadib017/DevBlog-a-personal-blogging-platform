@extends('index')

@section('content')
    @foreach ($posts as $post)
    <div>
        <h2>{{$post->title}}</h2>
        <h3>This post is created by {{$post->name}}</h3>
        <p>Post Category: {{$post->category}}</p>
        <img src="{{$post->image_url}}">
        <p>{{$post->content}}</p>
    </div>
    @endforeach

@endsection

<style>
    img{
        height: 200px;
        width: 300px;
        object-fit: inherit;
    }
</style>
