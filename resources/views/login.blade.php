@extends('templates.base')

@section('title', 'Socialchat | Login')

@section('content')
<div class="container">
    @if (session('status_register'))
        <div class="mt-3 alert alert-success">{{ session('status_register') }}</div>
    @endif
    <div class="mt-3">
        <form action="{{ url('/proseslogin') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('username') }}">
                <div class="invalid-feedback">
                    @error('username')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" value="{{ old('password') }}">
                <div class="invalid-feedback">
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember-me">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
@endsection

@section('javascript')
    <script type="text/javascript">
        console.log('ini dari halaman login')
    </script>
@endsection
