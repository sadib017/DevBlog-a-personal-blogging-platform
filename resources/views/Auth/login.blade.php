@extends('index')

@section('content')
    <div>
        <form class="login-form" action="{{route('login.submit')}}" method="POST">
            <h2>Login</h2>
            @csrf
            <input type="email" name="email" placeholder="Enter you email" required>

            @error('email', 'msg')
                <p style="color: red">{{$msg}}</p>

            @enderror
            <input type="password" minlength="8" name="password" placeholder="password" required >
            <button type="submit">login</button>
    </form>
    <div class="register-link">
        <p>Don't have an account? <a href="{{route('register')}}">Register here</a></p>
    </div>

    </div>


@endsection

<style>
    .login-form {
        max-width: 360px;
        margin: 48px auto;
        padding: 24px;
        border: 1px solid #ddd;
        border-radius: 12px;
        background: #fafafa;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    }

    .login-form h2 {
        margin-bottom: 18px;
        font-size: 22px;
        text-align: center;
        color: #333;
    }

    .login-form input {
        width: 100%;
        margin-bottom: 14px;
        padding: 12px 14px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 15px;
    }

    .login-form button {
        width: 100%;
        padding: 12px 14px;
        border: none;
        border-radius: 8px;
        background: #4a90e2;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    .login-form button:hover {
        background: #3b78c6;
    }

    .register-link {
        max-width: 360px;
        margin: 12px auto 36px;
        text-align: center;
        color: #555;
    }

    .register-link a {
        color: #4a90e2;
        text-decoration: none;
    }
</style>
