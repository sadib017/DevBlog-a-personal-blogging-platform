<nav class="nav">
    <div class="nav-left">
        <a href="{{route('home')}}">DevBlog</a>

    <div class="search-bar">
        <span></span>
    </div>
</div>

    <div class="nav-right">
        <a href="{{route('home')}}">Home</a>
        <a href="#">Membership</a>
        <a href="{{route('contact')}}">Contact</a>
        @guest
            @unless(request()->routeIs('login'))
                <a href="{{route('login')}}">Sign in</a>
            @endunless
        @endguest
        <a href="{{route('register')}}">Get started</a>
    </div>

</nav>

<style>
    .nav{
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #b2a7a7;
        padding: 12px 24px;
        border-bottom: 1px solid #e8e8e8;
        background: #bfb8b8;
        position: sticky;
        top: 0;
        z-index: 100;

    }
    .nav-right{
        display:flex;
        align-items: center;
        gap: 8px;
    }
</style>
