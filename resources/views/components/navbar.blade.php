<nav class="top-nav">
    <a class="brand" href="{{ route('home') }}">
        <span class="brand-mark">D</span>
        <span>DevBlog</span>
    </a>

    <div class="nav-links">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('membership') }}">Membership</a>
        <a href="{{ route('contact') }}">Contact</a>
        @guest
            @unless(request()->routeIs('login'))
                <a href="{{ route('login') }}">Sign in</a>
            @endunless
        @endguest
        <a class="nav-cta" href="{{ route('register') }}">Get started</a>
    </div>
</nav>

<style>
    .top-nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1rem 2rem;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(12px);
        border-bottom: 1px solid #e5e7eb;
        position: sticky;
        top: 0;
        z-index: 100;
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03);
    }

    .brand {
        display: inline-flex;
        align-items: center;
        gap: 0.7rem;
        font-size: 1.1rem;
        font-weight: 700;
        color: #111827;
        text-decoration: none;
        letter-spacing: 0.02em;
    }

    .brand-mark {
        display: grid;
        place-items: center;
        width: 2rem;
        height: 2rem;
        border-radius: 999px;
        background: linear-gradient(135deg, #111827, #4f46e5);
        color: white;
        font-weight: 700;
    }

    .nav-links {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .nav-links a {
        text-decoration: none;
        color: #4b5563;
        font-size: 0.95rem;
        transition: color 0.2s ease;
    }

    .nav-links a:hover {
        color: #111827;
    }

    .nav-cta {
        padding: 0.6rem 1rem;
        border-radius: 999px;
        background: #111827;
        color: white !important;
    }

    .nav-cta:hover {
        background: #1f2937;
        color: white !important;
    }

    @media (max-width: 640px) {
        .top-nav {
            padding: 0.9rem 1rem;
            flex-wrap: wrap;
            gap: 0.75rem;
        }

        .nav-links {
            width: 100%;
            justify-content: space-between;
            flex-wrap: wrap;
        }
    }
</style>
