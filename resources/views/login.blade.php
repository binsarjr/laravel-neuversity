@extends('layout.app')

@section('content')
    <main>
        <h2>Login</h2>
        <form method="POST">
            @csrf
            <div>
                <label for="">Email</label>
                <input type="text" class="input" placeholder="Email" name="email">
            </div>
            <div>
                <label>Password</label>
                <input type="password" class="input" placeholder="Password" name="password">
            </div>
            <button class="button is-success">Login</button>
        </form>
    </main>
@endsection
