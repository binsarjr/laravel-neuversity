@extends('layout.app')

@section('content')
    <main>
        <h2>Login</h2>

        @if (session('failedLoginMessage'))
            <small class="has-text-danger">{{ session('failedLoginMessage') }}</small>
        @endif

        <form method="POST">
            @csrf
            <div>
                <label for="">Email</label>
                <input type="text" class="input" placeholder="Email" name="email" value="{{ old('email') }}">
                @error('email')
                    <small class="has-text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label>Password</label>
                <input type="password" class="input" placeholder="Password" name="password">
                @error('password')
                    <small class="has-text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button class="button is-success">Login</button>
        </form>
    </main>
@endsection
