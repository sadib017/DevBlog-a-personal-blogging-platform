<footer class="site-footer">
    <div class="footer-links">
        <a href="{{ route('help') }}">Help</a>
        <a href="{{ route('status') }}">Status</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('careers') }}">Careers</a>
        <a href="{{ route('press') }}">Press</a>
        <a href="{{ route('blog') }}">Blog</a>
        <a href="{{ route('store') }}">Store</a>
        <a href="{{ route('privacy') }}">Privacy</a>
    </div>
    <p class="footer-copy">&copy; {{ date('Y') }} DevBlog. Crafted with care.</p>
</footer>

<style>
    .site-footer {
        padding: 1.5rem 2rem 2rem;
        background: #111827;
        color: #e5e7eb;
        border-top: 1px solid #1f2937;
        margin-top: 2rem;
    }

    .footer-links {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 1rem;
        margin-bottom: 0.75rem;
    }

    .footer-links a {
        text-decoration: none;
        color: #d1d5db;
        font-size: 0.95rem;
        transition: color 0.2s ease;
    }

    .footer-links a:hover {
        color: white;
    }

    .footer-copy {
        margin: 0;
        text-align: center;
        color: #9ca3af;
        font-size: 0.9rem;
    }

    @media (max-width: 640px) {
        .site-footer {
            padding: 1.25rem 1rem 1.5rem;
        }
    }
</style>
