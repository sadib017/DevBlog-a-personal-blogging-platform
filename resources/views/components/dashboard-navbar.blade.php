<nav style="display: flex; align-items: center; justify-content: space-between; padding: 16px 32px; border-bottom: 1px solid #e6e6e6;">

    <div style="display: flex; align-items: center; gap: 28px;">
        <button id="drawerToggle" style="background:none; border:none; cursor:pointer;">
            <i class="ti ti-menu-2" style="font-size: 22px;"></i>
        </button>
        <a href="{{ route('home') }}" style="font-family: serif; font-size: 24px; font-weight: 500; text-decoration: none; color: #000;">
            YourLogo
        </a>
    </div>

    <div style="flex: 1; max-width: 480px; margin: 0 32px;">
        <div style="display: flex; align-items: center; gap: 8px; background: #f4f4f4; border-radius: 20px; padding: 8px 16px;">
            <i class="ti ti-search" style="color:#999;"></i>
            <input type="text" placeholder="Search" style="border:none; background:transparent; outline:none; width:100%;">
        </div>
    </div>

    <div style="display: flex; align-items: center; gap: 24px;">
        @auth
            <a href="{{ route('contact') }}" style="display:flex; align-items:center; gap:6px; text-decoration:none; color:#444;">
                <i class="ti ti-pencil"></i> Write
            </a>
            <i class="ti ti-bell" style="font-size: 20px;"></i>
            <div style="width: 32px; height: 32px; border-radius: 50%; background: #ddd;"></div>
        @else
            <a href="{{ route('login') }}">Login</a>
        @endauth
    </div>

</nav>

{{-- Drawer --}}
<div id="drawer" style="position: fixed; top: 0; left: -260px; width: 260px; height: 100%; background: #fff; box-shadow: 2px 0 8px rgba(0,0,0,0.1); transition: left 0.3s; z-index: 999;">
    <ul style="list-style:none; padding: 20px;">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
    </ul>
</div>

<script>
document.getElementById('drawerToggle').addEventListener('click', function () {
    const drawer = document.getElementById('drawer');
    drawer.style.left = drawer.style.left === '0px' ? '-260px' : '0px';
});
</script>
