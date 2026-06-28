@extends('index')

@section('content')
    <div >
        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif
        <form action="{{route('contact.store')}}" method="POST" class="contact-form">
            @csrf
            <input type="text" name="name" placeholder="Your Name" required><br>
            <input type="email" name="email" placeholder="Your email" required><br>
            <textarea name="query" placeholder="Your message" required></textarea><br>
            <button type="submit">Send</button>
        </form>
    </div>

@endsection

<style>

    body{
        background-color:grey
    }
    .contact-form{
        display: flex;
        align-items: center;

    }
    input{
        padding: 12px;
        padding-top: 10px;
        margin: 12px;
    }
    textarea{
        padding: 12px;
        margin: 12px;
        padding-bottom: 10px;
    }
    button{
        color: black;
        border-radius: 8px;
        cursor: pointer;
        padding: 10px 20px;
        font-size: 15px;
        border-color: black;
        transition: 0.3s ease;

    }
    button:hover{
        background-color: #5cad44;
        padding: 10px;
        border: 1px solid #8a00c4;
    }
</style>
