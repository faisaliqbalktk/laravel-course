@extends('main-layout')

@section('title', 'Login | LaraDesign')

@section('main')
    <div class="login-page-wrapper">
        <div class="login-container">
            <h2 id="heading">Welcome Back</h2>
            <p class="login-subtitle">Please enter your details to sign in.</p>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control"
                        placeholder="name@company.com" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control"
                        placeholder="••••••••" required>
                </div>
                <button onclick="changeColor()" type="submit" class="login-btn">Sign In</button>
                <div class="forgot-password-link">
                    <a href="#">Forgot password?</a>
                </div>
            </form>
        </div>
    </div>
@endsection
