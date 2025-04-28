<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Neo Technology Login</title>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
<style>

    * {

      margin: 0;

      padding: 0;

      box-sizing: border-box;

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

      width: 350px;

    }
 
    .logo-title {

      display: flex;

      align-items: center;

      justify-content: center;

      margin-bottom: 10px;

    }
 
    .title-text {

      text-align: right;

    }
 
    .logo {
      width: 40px;
      margin-left: 10px;
    }
 
    .title-text h1 {
      font-size: 1.5rem;
      color: #00e5ff;
      margin-bottom: 2px;
    }
 
    .title-text h2 {

      font-size: 1.1rem;

      color: #ff00ff;

    }
 
    .input-box {

      background-color: #444;

      border-radius: 6px;

      padding: 10px;

      margin-bottom: 15px;

      display: flex;

      align-items: center;

      color: #ccc;

    }
 
    .input-box input {

      border: none;

      background: transparent;

      outline: none;

      color: #fff;

      flex: 1;

      font-size: 0.9rem;

    }
 
    .input-box i {

      margin-left: 10px;

      color: #aaa;

    }
 
    .btn {

      width: 100%;

      padding: 10px;

      background-color: #00d1ff;

      border: none;

      color: #000;

      font-weight: bold;

      border-radius: 20px;

      cursor: pointer;

      transition: 0.3s;

    }
 
    .btn:hover {

      background-color: #00c4f4;

    }
 
    .divider {

      display: flex;

      align-items: center;

      margin: 20px 0;

      color: #888;

      font-size: 0.8rem;

    }
 
    .divider::before,

    .divider::after {

      content: "";

      flex: 1;

      height: 1px;

      background: #888;

      margin: 0 10px;

    }
 
    .links {

      font-size: 0.8rem;

      color: #ccc;

      margin-bottom: 10px;

    }
 
    .link-group {

      margin-top: 25px;

    }
 
    .links a {

      color: #fff;

      text-decoration: none;

      font-weight: bold;

      margin-left: 5px;

    }
 
    .links a:hover {

      text-decoration: underline;

    }
 
    .error-message {

      color: #ff5555;

      font-size: 0.8rem;

      margin-bottom: 10px;

    }
</style>
</head>
<body>
<div class="container">
<form method="POST" action="{{ route('login') }}">

      @csrf
 
      <div class="logo-title">
<div class="title-text">
<h1>Neo Technology</h1>
<h2>ネオテクノロジー</h2>
</div>
<img src="{{ asset('img/lamen.png') }}" alt="Logo" class="logo" />
</div>
 
      {{-- Mensagem de erro --}}

      @if ($errors->any())
<div class="error-message">

          {{ $errors->first() }}
</div>

      @endif
 
      <div class="input-box">
<input type="email" name="email" placeholder="E-mail" required autofocus />
<i>📧</i>
</div>
 
      <div class="input-box">
<input type="password" name="password" placeholder="Senha" required autocomplete="current-password" />
<i>👁️</i>
</div>
 
      <button type="submit" class="btn">ENTRAR</button>
 
      <div class="divider">ou</div>
 
      <div class="link-group">
<div class="links">

          NÃO TEM UMA CONTA?
<a href="{{ route('register') }}">INSCREVA-SE</a>
</div>
<div class="links">

          ESQUECEU A SENHA?
<a href="{{ route('password.request') }}">REDEFINIR SENHA</a>
</div>
</div>
</form>
</div>
</body>
</html>

 