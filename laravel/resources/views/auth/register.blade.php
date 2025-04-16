<x-guest-layout>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Neo Technology - Cadastro</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
 
    <style>
      * {
        font-family: 'Orbitron', sans-serif;
      }
 
      body {
        background-color: #0f1512;
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
 
      .btn-register {
        width: 100%;
        padding: 10px;
        background-color: #ff00ff;
        border: none;
        color: #000;
        font-weight: bold;
        border-radius: 20px;
        transition: 0.3s;
      }
 
      .btn-register:hover {
        background-color: #e600e6;
      }
 
      .btn-back {
        margin-top: 20px;
        background-color: #00d1ff;
        color: #000;
        font-weight: bold;
        border-radius: 20px;
        border: none;
        padding: 10px 25px;
      }
 
      .btn-back:hover {
        background-color: #00c4f4;
      }
 
      .top-text {
        position: absolute;
        top: 10px;
        left: 10px;
        color: #aaa;
        font-size: 0.9rem;
      }

      @media (min-width: 640px) {
    .sm\:pt-0 {
        background-color: #00000000;
        }
      }

    .bg-white {
        background-color: #00000000;
        --bs-bg-opacity: 0;
        background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important;
      }
</style>
</head>
<body>
<div class="top-text"><img src="{{ asset('img/lamen.png') }}" alt="logo" class="logo"></div>
<div class="container">
 
      <div class="logo-title">
<h1>Neo Technology</h1>
<img src="{{ asset('img/lamen.png') }}" alt="Logo" class="logo" />
</div>
 
      <h2>ネオテクノロジー</h2>
 
      <form method="POST" action="{{ route('register') }}">
        @csrf
 
        <div class="input-group">
<input id="name" type="text" name="name" class="form-control" placeholder="Usuário" value="{{ old('name') }}" required autofocus>
<span class="input-group-text"><i class="fa fa-user"></i></span>
</div>
 
        <div class="input-group">
<input id="email" type="email" name="email" class="form-control" placeholder="Endereço de Email" value="{{ old('email') }}" required>
<span class="input-group-text"><i class="fa fa-envelope"></i></span>
</div>
 
        <div class="input-group">
<input id="password" type="password" name="password" class="form-control" placeholder="Senha" required autocomplete="new-password">
<span class="input-group-text"><i class="fa fa-lock"></i></span>
</div>
 
        <div class="input-group">
<input id="password_confirmation" type="password" name="password_confirmation" class="form-control" placeholder="Confirmar Senha" required>
<span class="input-group-text"><i class="fa fa-lock"></i></span>
</div>

<div class="input-group">
<input id="cpf" type="text" name="cpf" class="form-control" placeholder="CPF" value="{{ old('cpf') }}" required>
<span class="input-group-text"><i class="fa fa-id-card"></i></span>
</div>
 
        <x-input-error :messages="$errors->all()" class="mt-2 text-danger" />
 
        <button type="submit" class="btn btn-register mt-3">REGISTRAR</button>
</form>
 
      <a href="{{ route('login') }}">
<button class="btn btn-back mt-3">Voltar</button>
</a>
</div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</x-guest-layout>