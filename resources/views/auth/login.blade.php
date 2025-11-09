@extends('layouts.app')

@section('content')
<div class="auth-container">
  <div class="auth-card">
    <h2 class="glow-text">Welcome Back ⚡</h2>
    <form action="/auth/login" method="post">
      @csrf
      <input type="email" name="email" placeholder="Email" class="input-glow" required>
      <input type="password" name="password" placeholder="Password" class="input-glow" required>
      <button type="submit" class="btn-glow">Login</button>
    </form>
    <p class="small">Don’t have an account? <a href="/auth/register" class="link">Register</a></p>
  </div>
</div>
@endsection
