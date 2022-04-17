@extends('layouts.app')

@section('content')
    <div class="login-container">
        <div class="decoration">
            <h1>Welcome Again</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates voluptas unde quasi reprehenderit blanditiis delectus esse distinctio ad quam culpa ratione pariatur nam provident deserunt, deleniti nostrum, magnam nulla aspernatur.</p>
        </div>
        <div class="register">
        
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="register-form">
                <h3 class="error">
                    @if(session('error'))
                        {{ session('error') }}
                    @endif
                </h3>
                <div class="input-group">
                    <label for="">Email : </label>
                    <input type="text" name="email" placeholder="Your Email" value="{{ old('email') }}">
                    @error('email')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group">
                    <label for="">Password : </label>
                    <input type="password" name="password" placeholder="Your Password">
                    @error('password')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                    <button>Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection