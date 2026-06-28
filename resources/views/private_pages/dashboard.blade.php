<x-layout title="Dashboard">

    @foreach ($posts as $post)
        <div>
            <h2>{{$post->title}}</h2>
            <h3>
                This post is created by {{$post->name}} at {{$post->created_at->format('d M Y')}}
            </h3>
            <p>Post Category: {{$post->category}}</p>
            <br>
            <img src="{{$post->image_url}}">
            <br>
            <p>{{$post->content}}</p><br>
            {{-- <hr style="border: none; height: 1.2px; background-color: black;"> --}}
        </div>
    @endforeach
</x-layout>

<style>
    img{
        height: 200px;
        width: 300px;
        object-fit: inherit;
    }
</style>
