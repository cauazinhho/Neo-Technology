<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meu Perfil</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    * {
      font-family: 'Orbitron', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #0f1512;
      color: #fff;
      height: 100vh;
    }

    a {
      text-decoration: none;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 30px 40px;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo img {
      width: 30px;
    }

    .logo span {
      font-size: 20px;
      color: #00f0ff;
    }

    .user {
      font-size: 14px;
      color: #d1d1d1;
    }

    /* Container do formulário */
    .container {
      text-align: center;
      max-width: 450px;
      margin: 400px auto;
      padding: 30px 25px;
      background: #1a1a1a;
      border-radius: 12px;
    }

    /* Título e imagem */
    .logo img {
      width: 40px;
      height: 40px;
    }

    .logo-title img {
      width: 500px;
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
      font-size: 1.8rem;
      color: #00e5ff;
      margin: 0;
    }

    .container h2 {
      font-size: 1.2rem;
      color: #ff00ff;
      margin-bottom: 10px;
    }

    .container h3 {
      font-size: 1rem;
      font-weight: bold;
      margin-bottom: 20px;
    }

    /* Imagem de perfil */
    .perfil-container img {
      width: 140px;
      height: 140px;
      border-radius: 50%;
      border: 3px solid #00bfff;
      object-fit: cover;
      margin: 20px auto 10px;
      display: block;
    }

    /* Input */
    .input-group {
      background-color: #2a2a2a;
      border-radius: 8px;
      padding: 0 10px;
      display: flex;
      align-items: center;
      margin-bottom: 18px;
      border: 1px solid #00d1ff50;
    }

    .form-control {
      background: transparent;
      border: none;
      color: #fff;
      width: 100%;
      padding: 12px 10px;
      font-size: 14px;
    }

    .form-control:focus {
      outline: none;
    }

    .form-control::placeholder {
      color: #bbb;
    }

    .input-group-text {
      background: transparent;
      border: none;
      color: #aaa;
      cursor: pointer;
      font-size: 16px;
      padding-left: 10px;
    }

    /* Botão */
    .btn-reset {
      width: 100%;
      padding: 12px;
      background-color: #00d1ff;
      border: none;
      color: #000;
      font-weight: bold;
      border-radius: 25px;
      transition: 0.3s;
      font-size: 15px;
    }

    .btn-reset:hover {
      background-color: #00c4f4;
    }

    .text-danger {
      color: #ff3b3b;
      margin-bottom: 15px;
      font-size: 14px;
    }
  </style>
</head>

<body>
  <header>
    <a href="/telamain">
      <div class="logo">
        <span>Neo Technology</span>
        <img src="img/lamen.png" alt="Logo" />
      </div>
    </a>

    <div class="user">
      Bem vindo Usuário
    </div>
  </header>


  <div class="perfil-container">
    <!-- <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="Avatar" />
    <h2>Olá, Usuário</h2> -->

    <div class="container">
      <div class="logo-title">
        <h1>Neo Technology</h1>
        <img src="{{ asset('img/lamen.png') }}"/>
      </div>
      <h2>ネオテクノロジー</h2>
      <h3>Redefinir a senha</h3>

      @if ($errors->any())
      <div class="text-danger mb-3">
      @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
      </div>
    @endif

      <form method="POST" action="{{ route('password.cpf.reset') }}">
        @csrf

        <div class="input-group">
          <input type="text" name="cpf" class="form-control" placeholder="Digite seu CPF" required>
          <span class="input-group-text"><i class="fa fa-id-card"></i></span>
        </div>

        <div class="input-group">
          <input type="password" name="password" class="form-control" id="senha" placeholder="Nova senha" required>
          <span class="input-group-text" onclick="toggleSenha('senha', this)">
            <i class="fa fa-eye"></i>
          </span>
        </div>

        <div class="input-group">
          <input type="password" name="password_confirmation" class="form-control" id="confirmaSenha"
            placeholder="Confirmar nova senha" required>
          <span class="input-group-text" onclick="toggleSenha('confirmaSenha', this)">
            <i class="fa fa-eye"></i>
          </span>
        </div>

        <button type="submit" class="btn btn-reset mt-3">REDEFINIR</button>
      </form>
    </div>
  </div>
</body>

</html>