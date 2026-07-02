@extends('index')

@section('content')
    <div class="contact-page">
        @if(session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif

        <div class="contact-card">
            <div class="contact-intro">
                <h2>Contact Us</h2>
                <p>Share your thoughts, questions, or ideas. We’ll get back to you soon.</p>
            </div>

            <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your email" required>
                </div>

                <div class="form-group">
                    <label for="query">Message</label>
                    <textarea id="query" name="query" rows="5" placeholder="Your message" required></textarea>
                </div>

                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>
@endsection

<style>
    .contact-page {
        min-height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
        background: linear-gradient(135deg, #f8fafc 0%, #eef2ff 100%);
    }

    .contact-card {
        width: 100%;
        max-width: 520px;
        background: #ffffff;
        border-radius: 16px;
        padding: 32px;
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
    }

    .contact-intro {
        margin-bottom: 24px;
    }

    .contact-intro h2 {
        margin: 0 0 8px;
        color: #111827;
        font-size: 1.6rem;
    }

    .contact-intro p {
        margin: 0;
        color: #6b7280;
        line-height: 1.6;
    }

    .contact-form {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .form-group label {
        font-size: 0.95rem;
        font-weight: 600;
        color: #374151;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        border: 1px solid #d1d5db;
        border-radius: 10px;
        padding: 12px 14px;
        font-size: 0.95rem;
        outline: none;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
        box-sizing: border-box;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        border-color: #6366f1;
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.15);
    }

    .form-group textarea {
        resize: vertical;
        min-height: 110px;
    }

    button {
        margin-top: 8px;
        border: none;
        border-radius: 999px;
        background: #4f46e5;
        color: white;
        padding: 12px 18px;
        font-size: 0.95rem;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s ease, transform 0.2s ease;
    }

    button:hover {
        background: #4338ca;
        transform: translateY(-1px);
    }

    .success-message {
        margin-bottom: 16px;
        padding: 12px 14px;
        border-radius: 10px;
        background: #ecfdf3;
        color: #047857;
        border: 1px solid #a7f3d0;
    }
</style>
