@extends('index')

@section('content')
    <div class="membership-page">
        <div class="membership-card">
            <p class="eyebrow">Membership</p>
            <h1>Join DevBlog Membership</h1>
            <p class="lead">Support the blog and get access to exclusive updates, early posts, and community perks.</p>

            <ul class="benefits">
                <li>Early access to new articles</li>
                <li>Weekly updates and insights</li>
                <li>Member-only community discussions</li>
            </ul>

            <a href="{{ route('register') }}" class="membership-btn">Create account</a>
        </div>
    </div>
@endsection

<style>
    .membership-page {
        min-height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
        background: linear-gradient(135deg, #f8fafc 0%, #eef2ff 100%);
    }

    .membership-card {
        width: 100%;
        max-width: 540px;
        background: #fff;
        border-radius: 16px;
        padding: 32px;
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
    }

    .eyebrow {
        display: inline-block;
        margin-bottom: 10px;
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: #4f46e5;
    }

    .membership-card h1 {
        margin: 0 0 10px;
        color: #111827;
        font-size: 1.8rem;
    }

    .lead {
        margin: 0 0 18px;
        color: #6b7280;
        line-height: 1.6;
    }

    .benefits {
        padding-left: 20px;
        margin: 0 0 22px;
        color: #374151;
    }

    .benefits li {
        margin-bottom: 8px;
    }

    .membership-btn {
        display: inline-block;
        text-decoration: none;
        padding: 12px 18px;
        border-radius: 999px;
        background: #111827;
        color: white;
        font-weight: 600;
        transition: background 0.2s ease;
    }

    .membership-btn:hover {
        background: #1f2937;
    }
</style>
