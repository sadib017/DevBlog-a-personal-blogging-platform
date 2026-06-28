@props(['title' => ''])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui, Arial, sans-serif;
        }

        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 32px;
            border-bottom: 1px solid #e6e6e6;
            background: #fff;
        }

        .nav-left {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .menu-btn {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 22px;
        }

        .logo {
            font-family: serif;
            font-size: 24px;
            font-weight: 500;
            text-decoration: none;
            color: #000;
        }

        .search-box {
            flex: 1;
            max-width: 480px;
            margin: 0 32px;
            display: flex;
            align-items: center;
            gap: 8px;
            background: #f4f4f4;
            border-radius: 20px;
            padding: 8px 16px;
            border: 1px solid black;
        }

        .search-box input {
            border: none;
            background: transparent;
            outline: none;
            width: 100%;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .write-link {
            display: flex;
            align-items: center;
            gap: 6px;
            text-decoration: none;
            color: #444;
        }

        .avatar-link {
            display: inline-flex;
            text-decoration: none;
            position: relative;
        }

        .avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        .avatar:hover {
            transform: scale(1.05);
        }

        .profile-menu {
            position: absolute;
            top: calc(100% + 10px);
            right: 0;
            min-width: 200px;
            background: #fff;
            border: 1px solid rgba(0,0,0,0.08);
            border-radius: 14px;
            box-shadow: 0 18px 50px rgba(0,0,0,0.12);
            padding: 12px 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: opacity 0.18s ease, transform 0.18s ease, visibility 0.18s ease;
            z-index: 1000;
        }

        .profile-menu.open {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .profile-menu a,
        .profile-menu button {
            display: flex;
            align-items: center;
            width: 100%;
            gap: 10px;
            padding: 10px 16px;
            background: transparent;
            border: none;
            text-decoration: none;
            color: #333;
            font-size: 14px;
            cursor: pointer;
        }

        .profile-menu a:hover,
        .profile-menu button:hover {
            background: #f6f6f6;
        }

        .profile-menu .menu-heading {
            padding: 0 16px 10px;
            margin-bottom: 8px;
            border-bottom: 1px solid #eee;
            color: #666;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.06em;
        }

        /* Drawer */
        .drawer {
            position: fixed;
            top: 0;
            left: -260px;
            width: 260px;
            height: 100%;
            background: #fff;
            box-shadow: 2px 0 8px rgba(0,0,0,0.1);
            transition: left 0.3s ease;
            z-index: 999;
            padding: 20px;
        }

        .drawer ul {
            list-style: none;
        }

        .drawer ul li {
            margin-bottom: 12px;
        }

        .drawer a {
            text-decoration: none;
            color: #333;
        }

        /* Content */
        .container {
            padding: 24px 32px;
        }
    </style>
</head>

<nav>
    <div class="nav-left">
        <button id="drawerToggle" class="menu-btn">
            ☰
        </button>

        <a href="{{route('dashboard')}}" class="logo">
            DevBlog
        </a>
    </div>

    <div class="search-box">
        🔍
        <input type="text" placeholder="Search">
    </div>

    <div class="nav-right">
        @auth
            <a href="{{ route('create-post') }}" class="write-link">
                ✏️ Write
            </a>

            🔔

            <div class="avatar-link" id="profileToggle" aria-label="Profile menu">
                <div class="avatar">👤</div>
                <div class="profile-menu" id="profileMenu">
                    <div class="menu-heading">Account</div>
                    <a href="{{ route('profile.show') }}">View profile</a>
                    <a href="{{route('profile.update')}}">Settings</a>
                    <a href="#">Help</a>
                    <button type="button" id="signOutButton">Sign out</button>
                </div>
            </div>

        @else
            <a href="{{ route('login') }}">Login</a>
        @endauth
    </div>
</nav>


{{-- Page content --}}
<div class="container">
    {{ $slot }}
</div>

<script>
    const profileToggle = document.getElementById('profileToggle');
    const profileMenu = document.getElementById('profileMenu');

    if (profileToggle && profileMenu) {
        profileToggle.addEventListener('click', function (event) {
            event.stopPropagation();
            profileMenu.classList.toggle('open');
        });

        document.addEventListener('click', function (event) {
            if (!profileToggle.contains(event.target)) {
                profileMenu.classList.remove('open');
            }
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                profileMenu.classList.remove('open');
            }
        });
    }
</script>

</html>
