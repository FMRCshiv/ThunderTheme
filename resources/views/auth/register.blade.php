@extends('layouts.app')

@section('content')
<div class="auth-container">
  <div class="auth-card">
    <h2 class="glow-text">Create Account 💎</h2>
    <form action="/auth/register" method="post">
      @csrf
      <input type="text" name="username" placeholder="Username" class="input-glow" required>
      <input type="email" name="email" placeholder="Email" class="input-glow" required>
      <input type="password" name="password" placeholder="Password" class="input-glow" required>
      <button type="submit" class="btn-glow">Register</button>
    </form>
    <p class="small">Already registered? <a href="/auth/login" class="link">Login</a></p>
  </div>
</div>
@endsection
