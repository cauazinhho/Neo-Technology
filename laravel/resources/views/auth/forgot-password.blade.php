<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Neo Technology - Redefinir Senha</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    * {
      font-family: 'Orbitron', sans-serif;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: #0f1512;
      color: #fff;
      height: 100vh;
      margin: 0;
    }

    a {
      text-decoration: none;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 30px 40px;
      width: 100%;
      margin-bottom: 200px;
    }

    .logo-menu {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo-menu img {
      width: 30px;
    }

    .logo-menu span {
      font-size: 20px;
      color: #00f0ff;
    }

    .container {
      text-align: center;
      max-width: 450px;
      width: 100%;
      padding: 20px;
      background: #222;
      border-radius: 10px;
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
      font-size: 1.8rem;
      color: #00e5ff;
      margin: 0;
    }

    h2 {
      font-size: 1.2rem;
      color: #ff00ff;
      margin-bottom: 10px;
    }

    h3 {
      font-size: 1rem;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .input-group {
      background-color: #444;
      border-radius: 6px;
      padding: 10px;
      margin-bottom: 20px;
    }

    .form-control {
      background: transparent;
      border: none;
      color: #fff;
    }

    .form-control::placeholder {
      color: #ccc;
    }

    .input-group-text {
      background: transparent;
      border: none;
      color: #aaa;
      cursor: pointer;
    }

    .btn-reset {
      width: 100%;
      padding: 12px;
      background-color: #00d1ff;
      border: none;
      color: #000;
      font-weight: bold;
      border-radius: 20px;
      transition: 0.3s;
    }

    .btn-reset:hover {
      background-color: #00c4f4;
    }

    .text-danger {
      color: #ff3b3b;
      margin-bottom: 15px;
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
  <header>
    <a href="/telamain">
      <div class="logo-menu">
        <span>Neo Technology</span>
        <img src="img/lamen.png" />
      </div>
    </a>
    
    <div class="user">
      Bem-vindo Usuário
    </div>
  </header>

  <div class="container">
    <div class="logo-title">
      <h1>Neo Technology</h1>
      <img src="{{ asset('img/lamen.png') }}" alt="Logo" class="logo" />
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

  <script>
    function toggleSenha(idInput, icone) {
      const input = document.getElementById(idInput);
      const icon = icone.querySelector('i');
      if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
      } else {
        input.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
      }
    }
  </script>
</body>

</html>
