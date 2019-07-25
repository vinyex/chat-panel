@extends('layouts.app-login')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-label-group">
            <input type="text" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
            <label for="email">Username</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <label for="password">Password</label>
        </div>

        <p class="lead text-center" style="font-size: 16px;">Made it with ❤</p>

        <button class="btn btn-lg btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">
            Sign in
        </button>
    </form>
@endsection
