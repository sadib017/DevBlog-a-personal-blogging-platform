@extends('index')

@section('content')

    <div class="create-account">
        @if (session('success'))
            <div>{{session('success')}}</div>
        @endif

        <form class="register-form" action="{{route('register.store')}}" method="POST">
            @csrf

        @if ($errors->any())
        <div style="color:red; margin-bottom:15px;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif

            <label>Name:</label>
            <input type="text" name="name" value="" required>
            <label>Email:</label>
            <input type="text" name="email" value="" required>
            <label>Password:</label>
            <input type="password" name="password" value="" required minlength="8">
            <label>Confirm Password:</label>
            <input type="password" name="password_confirmation" value="" required>
            <label>Profession:</label>

            <div class="radio-buttons">
                <label><input type="radio" name="user_type" value="student">Student</label>
                <label><input type="radio" name="user_type" value="teacher">Teacher</label>
                <label><input type="radio" name="user_type" value="developer">Developer</label>
                <label><input type="radio" name="user_type" value="blogger">Blogger</label>
                <label><input type="radio" name="user_type" value="freelancer">Freelancer</label>
                <label><input type="radio" name="user_type" value="other">Other</label>
            </div>

            <div class="agree-terms">
                <label><input type="checkbox" name="agree_terms" required> Accept our privacy policy</label>
            </div>

            <button type="submit">Register</button>

        </form>
    </div>
    <div class="already-registered">
        <p>Already registered? <a href="{{route('login')}}">Log in</a></p>
    </div>
@endsection

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .create-account {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: linear-gradient(135deg, #667eea 0%, #0aa932 100%);
        font-family: fira code;
        padding: 20px;
    }

    .register-form {
        background: white;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        width: 100%;
        max-width: 450px;
    }

    .register-form > label {
        display: block;
        margin-bottom: 8px;
        margin-top: 15px;
        color: #555;
        font-weight: 500;
        font-size: 14px;
    }

    .register-form input[type="text"],
    .register-form input[type="email"],
    .register-form input[type="password"] {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        font-size: 14px;
        transition: all 0.3s ease;
        font-family: inherit;
        margin-bottom: 15px;
    }

    .register-form input[type="text"]:focus,
    .register-form input[type="email"]:focus,
    .register-form input[type="password"]:focus {
        outline: none;
        border-color: #27ae60;
        box-shadow: 0 0 0 3px rgba(39, 174, 96, 0.1);
    }

    .radio-buttons {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
        margin-bottom: 20px;
    }

    .radio-buttons label {
        display: flex;
        align-items: center;
        gap: 8px;
        margin: 0;
        cursor: pointer;
        font-weight: 400;
        font-size: 14px;
        color: #555;
    }

    .register-form input[type="radio"] {
        cursor: pointer;
        width: 18px;
        height: 18px;
        accent-color: #27ae60;
        flex-shrink: 0;
        margin: 0;
    }

    .agree-terms {
        display: flex;
        align-items: center;
        gap: 8px;
        margin: 20px 0 25px 0;
    }

    .agree-terms label {
        display: flex;
        align-items: center;
        gap: 8px;
        margin: 0;
        cursor: pointer;
        font-weight: 400;
        font-size: 14px;
        color: #555;
    }

    .register-form input[type="checkbox"] {
        cursor: pointer;
        width: 18px;
        height: 18px;
        accent-color: #27ae60;
        flex-shrink: 0;
        margin: 0;
    }

    .register-form button {
        width: 100%;
        padding: 12px;
        background: linear-gradient(135deg, #27ae60 0%, #229954 100%);
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(39, 174, 96, 0.3);
    }

    .register-form button:hover {
        background: linear-gradient(135deg, #229954 0%, #1e8449 100%);
        box-shadow: 0 6px 20px rgba(39, 174, 96, 0.4);
        transform: translateY(-2px);
        border: 1px solid black;

    }

    .register-form button:active {
        transform: translateY(0);
        box-shadow: 0 2px 10px rgba(39, 174, 96, 0.3);
    }

</style>
