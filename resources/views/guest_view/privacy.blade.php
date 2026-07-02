@extends('index')

@section('content')
    <div class="info-page">
        <div class="info-card">
            <h1>Privacy Policy</h1>
            <p>We respect your privacy. Your data is secure and never shared without consent. For details, see our full privacy policy.</p>
        </div>
    </div>
@endsection

<style>
    .info-page {
        min-height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
        background: linear-gradient(135deg, #f8fafc 0%, #eef2ff 100%);
    }

    .info-card {
        width: 100%;
        max-width: 540px;
        background: #fff;
        border-radius: 16px;
        padding: 32px;
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
    }

    .info-card h1 {
        margin: 0 0 16px;
        color: #111827;
        font-size: 1.8rem;
    }

    .info-card p {
        margin: 0;
        color: #6b7280;
        line-height: 1.6;
    }

    .info-card a {
        color: #4f46e5;
        text-decoration: none;
    }

    .info-card a:hover {
        text-decoration: underline;
    }
</style>
