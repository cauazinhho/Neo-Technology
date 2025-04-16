<x-guest-layout>
    <div class="top-text">
        <img src="{{ asset('img/lamen.png') }}" alt="logo" class="logo">
    </div>

    <div class="container">
        <div class="logo-title">
            <h1>Neo Technology</h1>
            <img src="{{ asset('img/lamen.png') }}" alt="Logo" class="logo" />
        </div>

        <h2>ネオテクノロジー</h2>

        <h3>Redefinir a senha.</h3>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="input-group">
                <input id="email" type="email" name="email" class="form-control"
                       placeholder="E-mail cadastrado" value="{{ old('email') }}" required autofocus>
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
            </div>

            <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />

            <button type="submit" class="btn btn-send">ENVIAR LINK</button>
        </form>
    </div>

    <style>
        * {
            font-family: 'Orbitron', sans-serif;
        }

        body {
            background-color: #0f1512;
            color: #fff;
        }

        .container {
            text-align: center;
            max-width: 400px;
            margin: 100px auto;
            width: 100%;
        }

        .logo {
            width: 50px;
            height: 50px;
        }

        .logo-title {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 5px;
        }

        .logo-title h1 {
            font-size: 1.5rem;
            color: #00e5ff;
            margin: 0;
        }

        h2 {
            font-size: 1.2rem;
            color: #ff00ff;
            margin-bottom: 30px;
        }

        h3 {
            font-size: 1.1rem;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .input-group {
            background-color: #444;
            border-radius: 6px;
            padding: 10px;
            margin-bottom: 20px;
        }

        .input-group input {
            background: transparent;
            border: none;
            color: #fff;
        }

        .input-group input::placeholder {
            color: #ccc;
        }

        .input-group-text {
            background: transparent;
            border: none;
            color: #aaa;
        }

        .btn-send {
            width: 100%;
            padding: 10px;
            background-color: #00d1ff;
            border: none;
            color: #000;
            font-weight: bold;
            border-radius: 20px;
            transition: 0.3s;
        }

        .btn-send:hover {
            background-color: #00c4f4;
        }

        .top-text {
            position: absolute;
            top: 10px;
            left: 10px;
            color: #aaa;
            font-size: 0.9rem;
        }
    </style>
</x-guest-layout>
