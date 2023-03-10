<h1>Forget Password Email</h1>
   
{{-- You can reset password from bellow link:
<a href="{{ route('reset.password.get', ['token' => $token])) }}">Reset Password</a> --}}
<a href="{{ route('reset.password.get', ['token' => $token]) }}">Reset Password</a>

{{-- 
<a href="{{ route('login.submit', ['token' => $token]) }}">Reset Password</a> --}}