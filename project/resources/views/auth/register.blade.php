@extends('layouts.app')

@section('content')
<div class="login-container">
    <div class="decoration"></div>    
    <div class="register">
        {{-- <h1>Register Page</h1> --}}
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="register-form">
                <div class="input-group">
                    <label for="">Name : </label>
                    <input type="text" name="name" placeholder="Your name" value="{{ old('name') }}">
                    @error('name')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group">
                    <label for="">Username : </label>
                    <input type="text" name="username" placeholder="Username" value="{{ old('username') }}">
                    @error('username')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
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
                <div class="input-group">
                    <label for="">Password Confirmation : </label>
                    <input type="password" name="password_confirmation" placeholder="Repeat your password">
                    @error('password')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button>Register</button>
            </div>
        </form>
    </div>
</div>  
@endsection