<x-layout>
    <style>
        .create-post-form {
            max-width: 520px;
            margin: 1.5rem auto;
            padding: 1.25rem;
            border: 1px solid #d1d5db;
            border-radius: 0.75rem;
            background: #f8fafc;
            box-shadow: 0 10px 20px rgba(15, 23, 42, 0.06);
        }

        .create-post-form h2,
        .create-post-form p,
        .create-post-form label {
            margin-bottom: 0.75rem;
        }

        .create-post-form input,
        .create-post-form textarea {
            width: 100%;
            padding: 0.85rem 0.95rem;
            margin-bottom: 0.9rem;
            border: 1px solid #cbd5e1;
            border-radius: 0.65rem;
            background: #ffffff;
            font-size: 0.98rem;
            color: #0f172a;
        }

        .create-post-form textarea {
            min-height: 140px;
            resize: vertical;
        }

        .create-post-form button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 0.95rem 1rem;
            border: none;
            border-radius: 0.75rem;
            background: #2563eb;
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .create-post-form button:hover {
            background: #1d4ed8;
        }

        .create-post-form .success-message,
        .create-post-form .error-message {
            margin-bottom: 1rem;
            padding: 0.9rem 1rem;
            border-radius: 0.65rem;
            font-size: 0.95rem;
        }

        .create-post-form .success-message {
            background: #ecfdf5;
            border: 1px solid #10b981;
            color: #064e3b;
        }

        h2 {
            text-align: center;
            margin: 1.5rem 0 0.75rem;
            color: #111827;
        }
    </style>

    <h2>This is the create-post page!</h2>
    <div>
        @if(session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif
        <form action="{{route('post.store')}}" method="POST" class="create-post-form">
            @csrf
            @method('post')
            
            <input type="text" name="title" placeholder="post title" required><br>
            <input type="text" name="name" placeholder="author name" required><br>
            <input type="text" name="category" placeholder="post category" required><br>
            <textarea name="content" placeholder="content" required></textarea><br>
            <input type="text" placeholder="image url link" name="image_url" required>
            <button type="submit">Send</button>
        </form>
    </div>

</x-layout>
