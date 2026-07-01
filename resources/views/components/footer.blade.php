<footer class="site-footer">
    <div class="footer-links">
        <a href="#">Help</a>
        <a href="#">Status</a>
        <a href="#">About</a>
        <a href="#">Careers</a>
        <a href="#">Press</a>
        <a href="#">Blog</a>
        <a href="#">Store</a>
        <a href="#">Privacy</a>
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
