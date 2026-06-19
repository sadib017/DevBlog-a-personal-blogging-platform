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
            <input type="text" minlength="8" name="password" placeholder="password" required>
            <button type="submit">login</button>
    </form>
    <div class="register-link">
        <p>Don't have an account? <a href="{{route('register')}}">Register here</a></p>
    </div>

    </div>


@endsection
