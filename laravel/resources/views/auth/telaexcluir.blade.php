<x-guest-layout>
    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Neo Technology - Excluir Conta</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

        <style>
            * {
                font-family: 'Orbitron', sans-serif;
            }

            body {
                background-color: #0d0f0d;
                color: #fff;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .container {
                text-align: center;
                max-width: 400px;
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
                margin-bottom: 20px;
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

            .input-group {
                background-color: #333;
                border-radius: 8px;
                padding: 10px;
                margin-bottom: 20px;
                display: flex;
                align-items: center;
            }

            .input-group input {
                background: transparent;
                border: none;
                color: #fff;
                width: 100%;
                outline: none;
            }

            .input-group input::placeholder {
                color: #ccc;
            }

            .input-group-text {
                background: transparent;
                border: none;
                color: #ccc;
                margin-left: 5px;
            }

            .btn-delete {
                width: 100%;
                padding: 10px;
                background: linear-gradient(90deg, #ff00ff, #ff00ff);
                color: #000;
                font-weight: bold;
                border: none;
                border-radius: 20px;
                margin-top: 10px;
                transition: 0.3s;
            }

            .btn-delete:hover {
                background: #cc00cc;
            }

            .btn-back {
                margin-top: 20px;
                background: #00d1ff;
                color: #000;
                font-weight: bold;
                border: none;
                border-radius: 20px;
                padding: 10px 30px;
                transition: 0.3s;
            }

            .btn-back:hover {
                background: #00c4f4;
            }

            .top-text {
                position: absolute;
                top: 10px;
                left: 10px;
                color: #aaa;
                font-size: 0.9rem;
            }
        </style>
    </head>

    <body>
        <div class="top-text">
            <img src="{{ asset('img/lamen.png') }}" alt="logo" class="logo">
        </div>

        <div class="container">

            <div class="logo-title">
                <h1>Neo Technology</h1>
                <img src="{{ asset('img/lamen.png') }}" alt="Logo" class="logo" />
            </div>

            <h2>ネオテクノロジー</h2>

            <form method="POST" action="{{ route('profile.destroy') }}">
                @csrf
                @method('DELETE')

                <div class="input-group">
                    <input id="cpf" type="text" name="cpf" placeholder="CPF"
                        value="{{ old('cpf', auth()->user()->cpf) }}" required>
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>

                <div class="input-group">
                    <input id="email" type="email" name="email" placeholder="Endereço de E-mail"
                        value="{{ old('email', auth()->user()->email) }}" required>
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>

                <x-input-error :messages="$errors->all()" class="mt-2 text-danger" />

                <button type="submit" class="btn btn-delete">EXCLUIR</button>
            </form>

            <a href="{{ route('dashboard') }}">
                <button class="btn btn-back">Voltar</button>
            </a>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
</x-guest-layout>