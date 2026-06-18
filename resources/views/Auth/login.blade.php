@extends('index')

@section('content')
    <div>
        <form class="login-form" action="{{route('login')}}" method="POST">
            <h2>Login</h2>
            @csrf
            <input type="text" name="Username" placeholder="Username" required>
            <input type="text" name="Password" placeholder="Password" required>
            <button type="submit">login</button>
    </form>
    <div class="register-link">
        <p>Don't have an account? <a href="{{route('register')}}">Register here</a></p>
    </div>

    </div>


@endsection
