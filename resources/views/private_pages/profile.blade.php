<x-layout>

    <style>

        body{
            background-color: grey
        }
        .profile-page {
            max-width: 760px;
            margin: 32px auto;
            padding: 0 20px;
            color: #333;
        }

        .profile-info {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 18px;
            padding: 24px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
            margin-bottom: 24px;
        }

        .profile-info h2 {
            margin-bottom: 6px;
            font-size: 28px;
        }

        .profile-info h3 {
            margin: 18px 0 10px;
            font-size: 16px;
            color: #555;
        }

        .profile-info p {
            margin: 8px 0;
            line-height: 1.6;
            color: #4b5563;
        }

        .update-profile {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 18px;
            padding: 24px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
        }

        .update-form h3 {
            margin: 16px 0 8px;
            font-size: 15px;
            color: #111827;
        }

        .update-form input[type="text"],
        .update-form input[type="email"] {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid #d1d5db;
            border-radius: 12px;
            background: #f9fafb;
            margin-bottom: 14px;
            font-size: 15px;
            color: #111827;
        }

        .radio-buttons {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 10px;
            margin-bottom: 18px;
        }

        .radio-buttons label {
            display: flex;
            align-items: center;
            gap: 8px;
            background: #f8fafc;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 10px 12px;
            cursor: pointer;
            font-size: 14px;
            color: #374151;
        }

        .radio-buttons input {
            accent-color: #2563eb;
        }

        .update-form button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 22px;
            border: none;
            border-radius: 999px;
            background: #2563eb;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .update-form button:hover {
            background: #1d4ed8;
        }

        .session-msg {
            margin-bottom: 18px;
            padding: 14px 16px;
            border-radius: 12px;
            background: #ecfdf5;
            border: 1px solid #d1fae5;
            color: #166534;
            font-size: 14px;
            line-height: 1.5;
        }
    </style>

    <div class="profile-page">
        <div class="profile-info">
        <h2>This is the profile page</h2>
        <h3>Your Profile Information: </h3>

        <p>{{$user->name}}</p>
        <p>{{$user->email}}</p>
        <p>{{$user->user_type}}</p>
        <p>Member since: {{ $user->created_at->format('d M Y') }}</p>
    </div>
    <br>
    <hr>
    <br>

    <div class="update-profile">

        @if(session('success'))
            <div class="session-msg"> {{session('success')}} </div>

        @endif

        <form class="update-form" method="POST" action="{{route('profile.update')}}">
            @csrf
            @method('put')

        @if ($errors->any())
        <div style="color:red; margin-bottom:15px;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif

            <h3>Name: </h3>
            <input type="text" name="name" value="{{$user->name}}">
            <h3>Email: </h3>
            <input type="email" name="email" value="{{old('email', $user->email)}}">

            <h3>User Type</h3>
            <div class="radio-buttons">
                <label>
                    <input type="radio" name="user_type" value="student"
                    {{ $user->user_type == 'student' ? 'checked' : '' }}>
                    Student
                </label>
                <label>
                    <input type="radio" name="user_type" value="teacher"
                    {{ $user->user_type == 'teacher' ? 'checked' : '' }}>
                    Teacher
                </label>
                <label>
                    <input type="radio" name="user_type" value="developer"
                    {{ $user->user_type == 'developer' ? 'checked' : '' }}>
                    Developer
                </label>
                <label>
                    <input type="radio" name="user_type" value="blogger"
                    {{ $user->user_type == 'blogger' ? 'checked' : '' }}>
                    Blogger
                </label>
                <label>
                    <input type="radio" name="user_type" value="freelancer"
                    {{ $user->user_type == 'freelancer' ? 'checked' : '' }}>
                    Freelancer
                </label>
                <label>
                    <input type="radio" name="user_type" value="other"
                    {{ $user->user_type == 'other' ? 'checked' : '' }}>
                    Other
                </label>
            </div>

            <button type="submit">Update Profile</button>

        </form>
    </div>
</div>
</x-layout>
