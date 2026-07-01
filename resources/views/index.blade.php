<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DevBlog</title>
    <style>
        body {
            margin: 0;
            font-family: 'Inter', 'Segoe UI', sans-serif;
            background: #f8fafc;
            color: #111827;
        }

        .page-shell {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .page-content {
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="page-shell">
        {{-- navbar --}}
        @include('components.navbar')

        {{-- content body --}}
        <main class="page-content">
            @yield('content')
        </main>

        {{-- footer --}}
        @include('components.footer')
    </div>
</body>
</html>
