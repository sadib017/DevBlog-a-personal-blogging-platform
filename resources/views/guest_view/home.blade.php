@extends('index')

@section('content')
<div class="posts-wrapper">
    @foreach ($posts as $post)
    <article class="post-card">
        <div class="post-image-wrap">
            <img src="{{ $post->image_url }}" alt="{{ $post->title }}">
        </div>
        <div class="post-content">
            <h2 class="post-title">{{ $post->title }}</h2>
            <h3 class="post-author">This post is created by {{ $post->name }}</h3>
            <p class="post-category">Post Category: {{ $post->category }}</p>
            <p class="post-text">{{ $post->content }}</p>
        </div>
    </article>
    @endforeach
</div>
@endsection

<style>
    .posts-wrapper {
        max-width: 900px;
        margin: 2rem auto;
        padding: 0 1rem;
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .post-card {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
    }

    .post-image-wrap {
        background: #f3f4f6;
    }

    .post-card img {
        display: block;
        width: 100%;
        height: 240px;
        object-fit: cover;
    }

    .post-content {
        padding: 1.25rem 1.5rem 1.5rem;
    }

    .post-title {
        margin: 0 0 0.5rem;
        font-size: 1.35rem;
        color: #111827;
    }

    .post-author {
        margin: 0 0 0.35rem;
        font-size: 0.95rem;
        color: #4b5563;
    }

    .post-category {
        margin: 0 0 0.75rem;
        font-weight: 600;
        color: #2563eb;
    }

    .post-text {
        margin: 0;
        line-height: 1.6;
        color: #374151;
    }

    @media (max-width: 640px) {
        .post-card img {
            height: 200px;
        }

        .post-content {
            padding: 1rem;
        }
    }
</style>
